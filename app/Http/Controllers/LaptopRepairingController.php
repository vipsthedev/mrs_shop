<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaptopReairing;
use App\Models\LaptopReairingImages;
use Illuminate\Support\Facades\Route;

class LaptopRepairingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (str_contains(Route::current()->uri(), 'admin')) {

            $LaptopReairing=[];//LaptopReairing::with('Company')->get();
            return view('/laptop/index',compact('LaptopReairing'));
        }else{
            if($request->has('search')){
                 $search = $request->get('search');
                  $LaptopReairing = LaptopReairing::when($search, function ($query, $search) {
                    return $query->where('customer_name', 'like', '%' . $search . '%')
                                 ->orWhereHas('Company', function($query) use ($search) {
                                     $query->where('name', 'like', '%' . $search . '%');
                                 });
                })->get();
            }else{
                $LaptopReairing=[];//LaptopReairing::with('Company')->get();
            }
            return view('frontend-themes/laptop/index',compact('LaptopReairing'));
        }
    }

    public function create()
    {
        if (str_contains(Route::current()->uri(), 'admin')) {
            $companies = Company::get();
            return view('/mobileRepair/add',compact('companies'));
        }else{

            $companies = Company::get();
            return view('/frontend-themes/laptopadd',compact('companies'));
        }
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
                'customer_name' => 'required|string|max:255',
                'company_id' => 'required|exists:companies,id',
                'reapring_cost' => 'required|numeric|min:0',
                'reapring_charge' => 'required|numeric|min:0',
                'total_amount' => 'required|numeric|min:0'
                
            ], [
                'customer_name.required' => 'The name field is mandatory.',
                'company_id.required' => 'The company field is mandatory.',
                'reapring_cost.required' => 'The company field is mandatory.',
            ]);
            
            // $saveData=LaptopReairing::create($request->all());
            $saveData=LaptopReairing::create([
                        'customer_name'=>$request['customer_name'],
                        'customer_email'=>$request['customer_email'],
                        'customer_date'=>$request['customer_date'],
                        'company_id'=>$request['company_id'],
                        'customer_address'=>$request['customer_address'],
                        'status'=>$request['status'],
                        'customer_mobile_name'=>$request['customer_mobile_name'],
                        'customer_mobile_model'=>$request['customer_mobile_model'],
                        'customer_mobile_problem'=>$request['customer_mobile_problem'],
                        'reapring_cost'=>$request['reapring_cost'],
                        'reapring_charge'=>$request['reapring_charge'],
                        'total_amount'=>$request['total_amount'],
                        'delivery_date'=>$request['delivery_date'],
                        'receiver_person_name'=>$request['receiver_person_name'],
                        'reference_name'=>$request['reapring_charge'],
                        'other_contact_details'=>$request['total_amount'],
                        'comments'=>$request['delivery_date'],
                   ]);
            if($saveData['id']){
                $this->uploadSubmit($saveData['id'],$request);
            }
            return redirect()->route('user-mobile-repairing.index')->with('success', 'Mobile Repairing Details added successfully!');
    }
    public function uploadSubmit($id,$request){
        try{
            if($request->hasFile('mobile_images'))
            {
                $allowedfileExtension=['pdf','jpg','png','docx'];
                $files = $request->file('mobile_images');
                foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                    if($check)
                    {   
                        $uploadPath = public_path().'\mobile-repairing-img';
                        $file->move($uploadPath,$filename);
                        $LaptopReairingImg = new LaptopReairingImages();
                        $LaptopReairingImg->mobile_repairings_id = $id;
                        $LaptopReairingImg->mobile_images = $filename;
                        $LaptopReairingImg->save();
                    }
                }
            }
        }
        catch(Exception $e){
            // dd($e);
        }
    }
    // Show the form to edit an existing staff member
    public function edit($id)
    {
        
        // $LaptopReairing=LaptopReairing::with('Company')->get();
        $LaptopReairing = LaptopReairing::findOrFail($id);
        $companies = Company::get();
        if (str_contains(Route::current()->uri(), 'admin')) {
            return view('mobileRepair/edit', compact('LaptopReairing','companies'));
        }else{
             return view('frontend-themes/laptopadd', compact('LaptopReairing','companies'));
        }
    }

    public function update(Request $request, $id)
    {
         $validated = $request->validate([
                'customer_name' => 'required|string|max:255',
                'company_id' => 'required|exists:companies,id',
                'reapring_cost' => 'required|numeric|min:0',
                'reapring_charge' => 'required|numeric|min:0',
                'total_amount' => 'required|numeric|min:0'
                
            ], [
                'customer_name.required' => 'The name field is mandatory.',
                'company_id.required' => 'The company field is mandatory.',
                'reapring_cost.required' => 'The company field is mandatory.',
            ]);
        $date=now()->format('Y-m-d');
        $LaptopReairing = LaptopReairing::findOrFail($id);
        $LaptopReairing->update([
                        'customer_name'=>$request['customer_name'],
                        'customer_date'=>$date,
                        'customer_email'=>$request['customer_email'],
                        'customer_date'=>$request['customer_date'],
                        'company_id'=>$request['company_id'],
                        'customer_address'=>$request['customer_address'],
                        'status'=>$request['status'],
                        'customer_mobile_name'=>$request['customer_mobile_name'],
                        'customer_mobile_model'=>$request['customer_mobile_model'],
                        'customer_mobile_problem'=>$request['customer_mobile_problem'],
                        'reapring_cost'=>$request['reapring_cost'],
                        'reapring_charge'=>$request['reapring_charge'],
                        'total_amount'=>$request['total_amount'],
                        'delivery_date'=>$request['delivery_date'],
                        'receiver_person_name'=>$request['receiver_person_name'],
                        'reference_name'=>$request['reapring_charge'],
                        'other_contact_details'=>$request['total_amount'],
                        'comments'=>$request['delivery_date'],
                   ]);
        $this->uploadSubmit($id,$request);
        return redirect()->route('mobile-repairing.index')->with('success', 'Mobile Repairing updated successfully!');
    }

    // Delete the staff member from the database
    public function destroy($id)
    {
        $staff = LaptopReairing::findOrFail($id);
        $staff->delete();

        return redirect()->route('user-mobile-repairing.index')->with('success', 'Mobile Repairing deleted successfully!');
    }
}