<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobileRepairing;
use App\Models\MobileRepairingImages;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Exception;

class MobileRepairingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    private function isAdminRoute(): bool
    {
        return str_contains(Route::current()->uri(), 'admin');
    }

    public function index(Request $request)
    {
        if ($this->isAdminRoute()) {
            $mobileRepairing = MobileRepairing::with('Company')->get();
            return view('mobileRepair.index', compact('mobileRepairing'));
        }

        $search = $request->get('search');
        $mobileRepairing = MobileRepairing::when($search, function ($query, $search) {
            return $query->where('customer_name', 'like', "%$search%")
                         ->orWhereHas('Company', function ($q) use ($search) {
                             $q->where('name', 'like', "%$search%");
                         });
        })->with('Company')->get();

        return view('frontend-themes.mobile.index', compact('mobileRepairing'));
    }

    public function show($id)
    {
        // $mobileRepairing->load('images')->get();
        $mobileRepairing = MobileRepairing::with('images')->findOrFail($id);
        $companies = Company::all();
        $view = $this->isAdminRoute() ? 'mobileRepair.show' : 'frontend-themes.mobile.show';
        return view($view, compact('mobileRepairing', 'companies'));
    }

    public function create()
    {
        $companies = Company::all();
        $view = $this->isAdminRoute() ? 'mobileRepair.add' : 'frontend-themes.mobile.add';
        return view($view, compact('companies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'repairing_cost' => 'required|numeric|min:0',
            'repairing_charge' => 'required|numeric|min:0',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $data = $request->only([
            'customer_name', 'customer_email', 'customer_date', 'company_id', 'customer_address',
            'status', 'customer_mobile_name', 'customer_mobile_model', 'customer_mobile_imi_number',
            'customer_mobile_problem', 'repairing_cost', 'repairing_charge', 'total_amount',
            'delivery_date', 'receiver_person_name', 'reference_name', 'other_contact_details', 'comments'
        ]);

        $mobileRepairing = MobileRepairing::create($data);

        if ($mobileRepairing->id) {
            $this->uploadSubmit($mobileRepairing->id, $request);
        }

        return redirect()->route('user-mobile-repairing.index')->with('success', 'Mobile Repairing Details added successfully!');
    }

    public function edit($id)
    {
        // $mobileRepairing->load('images');
        // dd($mobileRepairing);
        $mobileRepairing = MobileRepairing::with('images')->findOrFail($id);
        $companies = Company::all();
        $view = $this->isAdminRoute() ? 'mobileRepair.edit' : 'frontend-themes.mobile.edit';
        return view($view, compact('mobileRepairing', 'companies'));
    }

    public function update(Request $request, MobileRepairing $mobileRepairing)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'repairing_cost' => 'required|numeric|min:0',
            'repairing_charge' => 'required|numeric|min:0',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $data = $request->only([
            'customer_name', 'customer_email', 'customer_date', 'company_id', 'customer_address',
            'status', 'customer_mobile_name', 'customer_mobile_model', 'customer_mobile_imi_number',
            'customer_mobile_problem', 'repairing_cost', 'repairing_charge', 'total_amount',
            'delivery_date', 'receiver_person_name', 'reference_name', 'other_contact_details', 'comments'
        ]);

        $mobileRepairing->update($data);

        $this->uploadSubmit($mobileRepairing->id, $request);

        return redirect()->route('user-mobile-repairing.index')->with('success', 'Mobile Repairing updated successfully!');
    }

    public function destroy($id)
    {
        $mobileRepairing = MobileRepairing::with('images')->findOrFail($id);
        $mobileRepairing->delete();
        return redirect()->route('user-mobile-repairing.index')->with('success', 'Mobile Repairing deleted successfully!');
    }

    private function uploadSubmit($id, Request $request)
    {
        try {
            if ($request->hasFile('mobile_images')) {
                $allowedExtensions = ['pdf', 'jpg', 'png', 'docx'];
                $files = $request->file('mobile_images');
                foreach ($files as $file) {
                    $extension = $file->getClientOriginalExtension();
                    if (in_array($extension, $allowedExtensions)) {
                        $filename = $file->getClientOriginalName();
                        $uploadPath = public_path('mobile-repairing-img');
                        $file->move($uploadPath, $filename);

                        MobileRepairingImages::create([
                            'mobile_repairings_id' => $id,
                            'mobile_images' => $filename
                        ]);
                    }
                }
            }
        } catch (Exception $e) {
            Log::error('Image upload error: ' . $e->getMessage());
        }
    }
}
