<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;


class StaffController extends Controller
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

    // Show a list of all staff members
    public function index()
    {
        $staff = Staff::all();
        return view('staff/index', compact('staff'));
    }

    // Show the form to create a new staff member
    public function create()
    {
        return view('staff/add');
    }

    // Store a newly created staff member in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:staffs,email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|in:active,inactive',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'department' => 'nullable|string',
            'position' => 'nullable|string',
            'hire_date' => 'nullable|date',
            'shift_name' => 'nullable|string',
        ]);

        Staff::create($validatedData);

        return redirect()->route('staff.index')->with('success', 'Staff member created successfully!');
    }

    // Show the form to edit an existing staff member
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff'));
    }

    // Update the staff member in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:staffs,email,' . $id,
            'phone' => 'required|string',
            'address' => 'required|string',
            'status' => 'required|in:active,inactive',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'department' => 'nullable|string',
            'position' => 'nullable|string',
            'hire_date' => 'nullable|date',
            'salary' => 'nullable|numeric',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->update($validatedData);

        return redirect()->route('staff.index')->with('success', 'Staff member updated successfully!');
    }

    // Delete the staff member from the database
    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('staff.index')->with('success', 'Staff member deleted successfully!');
    }
}