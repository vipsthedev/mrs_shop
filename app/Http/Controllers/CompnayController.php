<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompnayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::get();
        return view('/companies/index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/companies/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
        
            $validated = $request->validate([
                'name' => 'required|string|max:255',
            ], [
                'name.required' => 'The name field is mandatory.',
            ]);
         // dd($request->all());
        Company::create($request->all());
        return redirect()->route('companies.index')->with('success', 'companies added successfully!');
        }
        catch (Exception $e){
            dd($e);   
            Log::error($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::find($id);
        return view('companies.show', compact('companies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $companies = Company::find($id);
        return view('companies.show', compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
         ]);
        // dd($request->all());
        $companies=Company::find($id);
        $companies->update(['name'=>$request->get('name'),'description'=>$request->get('description')]);

        return redirect()->route('companies.index')->with('success', 'companies updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $companies = Company::find($id);
        $companies->delete();

        return redirect()->route('companies.index')->with('success', 'companies deleted successfully!');
    }
}
