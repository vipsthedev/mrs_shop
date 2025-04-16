<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobileRepairing;
use App\Models\MobileRepairingImages;
use App\Models\Company;
use Carbon\Carbon;


class MobileRepairingController extends Controller
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
    public function index()
    {
        $mobileRepairing=MobileRepairing::with('Company')->get();
        return view('/mobileRepair/index',compact('mobileRepairing'));
    }
    public function create()
    {
        $companies = Company::get();
        return view('/mobileRepair/add',compact('companies'));
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
            
            // $saveData=MobileRepairing::create($request->all());
            $saveData=MobileRepairing::create([
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
            return redirect()->route('mobile-repairing.index')->with('success', 'Mobile Repairing Details added successfully!');
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
                        $mobileRepairingImg = new MobileRepairingImages();
                        $mobileRepairingImg->mobile_repairings_id = $id;
                        $mobileRepairingImg->mobile_images = $filename;
                        $mobileRepairingImg->save();
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
        $mobileRepairing = MobileRepairing::findOrFail($id);
        $companies = Company::get();
        return view('mobileRepair/edit', compact('mobileRepairing','companies'));
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
        $mobileRepairing = MobileRepairing::findOrFail($id);
        $mobileRepairing->update([
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
        $staff = MobileRepairing::findOrFail($id);
        $staff->delete();

        return redirect()->route('mobile-repairing.index')->with('success', 'Mobile Repairing deleted successfully!');
    }
}
