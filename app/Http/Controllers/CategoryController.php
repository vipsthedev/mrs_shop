<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $category = Category::get();
        if (str_contains(Route::current()->uri(), 'admin')) {
            return view('/category/index',compact('category'));
        }else{
             if($request->has('search')){
                 $search = $request->get('search');
                  $category = category::when($search, function ($query, $search) {
                    return $query->where('name', 'like', '%' . $search . '%')
                                 ->orWhereHas('Company', function($query) use ($search) {
                                     $query->where('name', 'like', '%' . $search . '%');
                                 });
                })->get();
            }
            return view('/frontend-themes/category/index',compact('category'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::get();
        
        if (str_contains(Route::current()->uri(), 'admin')) {
           return view('/category/add',compact('category'));
        }else{
           return view('/frontend-themes/category/add',compact('category'));
        }
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
        
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'description' => 'nullable|string',
        //  ]);
        $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string'
            ], [
                'name.required' => 'The name field is mandatory.',
            ]);
         // dd($request->all());
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', 'category added successfully!');
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
        $category = Category::find($id);
        $categories = Category::all();
        return view('category.show', compact('category'));
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
        $category = Category::find($id);
        $categories = Category::all();
        return view('category.show', compact('category','categories'));
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
         //  $request->validate([
         //    'name' => 'required|string|max:255',
         //    'description' => 'nullable|string',
         // ]);
         $validated = $request->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string'
            ],
            [
                'name.required' => 'The name field is mandatory.',
        ]);
        // dd($request->all());
        $category=Category::find($id);
        $category->update(['name'=>$request->get('name'),'parent_id'=>$request->get('parent_id'),'description'=>$request->get('description')]);

        return redirect()->route('category.index')->with('success', 'category updated successfully!');
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
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('category.index')->with('success', 'category deleted successfully!');
    }
}

