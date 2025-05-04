<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Accessory;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use DB;


class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (str_contains(Route::current()->uri(), 'admin')) {

            $accessories = Accessory::with('category')->get();
            return view('accessory/index',compact('accessories'));
        }else{

            if($request->has('search')){
                 $search = $request->get('search');
                  $accessories = Accessory::when($search, function ($query, $search) {
                    return $query->where('name', 'like', '%' . $search . '%')
                                 ->orWhereHas('Company', function($query) use ($search) {
                                     $query->where('name', 'like', '%' . $search . '%');
                                 });
                })->get();
            }else{
               $accessories = Accessory::with('category')->get();
            }
            
            return view('frontend-themes/accessory/index',compact('accessories'));
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
        $categories = Category::all();
        $companies = Company::get();
        if (str_contains(Route::current()->uri(), 'admin')) {
            return view('/accessory/add',compact('companies','categories'));
        }else{
            return view('frontend-themes/accessory/add',compact('companies','categories'));
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
            if(isset($request['sales_quantity'])){

                $accessory=$this->manageSellingAccessory($request);
                $msg="Accessory ".$accessory['name']." sales successfully! Now available stock is ".$accessory['quantity'];
                return redirect()->route('accessories.sales')->with('success', $msg);

            }else{
            // Custom validation rules and messages
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'company_id' => 'required|exists:companies,id',
                'category_id' => 'required|exists:categories,id',
                'brand' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|integer',
                'purchase_cost' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
                'restock_quantity' => 'required|integer|min:0',
                'is_available' => 'boolean',
            ], [
                'name.required' => 'The name field is mandatory.',
                'company_id.required' => 'The company field is mandatory.',
                'category_id.required' => 'The category field is mandatory.',
                'quantity.required' => 'The quantity field is mandatory.',
                'restock_quantity' => 'The Restock quantity field is mandatory',
            ]);


            
            Accessory::create($request->all());

            return redirect()->route('accessories.index')->with('success', 'Accessory added successfully!');
            }
        }
        catch (Exception $e){
            // dd($e);   
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
        //
        $categories = Category::all();
        $companies = Company::get();
        $accessory = Accessory::find($id);
        return view('/accessory/show',compact('accessory', 'categories','companies'));
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
        $categories = Category::all();
        $companies = Company::get();
        $accessory = Accessory::find($id);
        return view('/accessory/edit',compact('accessory', 'categories','companies'));
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
        $validated = $request->validate([
                'name' => 'required|string|max:255',
                'company_id' => 'required|exists:companies,id',
                'category_id' => 'required|exists:categories,id',
                'brand' => 'nullable|string|max:255',
                'description' => 'nullable|string',
                'status' => 'required|integer',
                'purchase_cost' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
                'restock_quantity' => 'required|integer|min:0',
                'is_available' => 'boolean',
            ], [
                'name.required' => 'The name field is mandatory.',
                'company_id.required' => 'The company field is mandatory.',
                'category_id.required' => 'The category field is mandatory.',
                'quantity.required' => 'The quantity field is mandatory.',
                'restock_quantity' => 'The Restock quantity field is mandatory',
            ]);

        $accessory = Accessory::find($id);
        $accessory->update($request->all());
         return redirect()->route('accessories.index')->with('success', 'Accessory Update successfully!');
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
        $accessory = Accessory::find($id);
        $accessory->delete();

        return redirect()->route('accessories.index')->with('success', 'Accessory deleted successfully!');
    }

    public function restockAccessories(){

        $accessories = Accessory::whereRaw('quantity < restock_quantity')->get();
        return view('/accessory/index',compact('accessories'));
    }

    public function salesAccessories(){

        $accessories = Accessory::all();
         if (str_contains(Route::current()->uri(), 'admin')) {
            return view('/accessory/sales',compact('accessories'));
        }else{
            return view('frontend-themes//accessory/sales',compact('accessories'));
        }
    }
    public function manageSellingAccessory($request){
        try{
            $accessory_id=$request['accessory_id'];
            $sales_quantity=$request['sales_quantity'];
            $accessory=Accessory::find($accessory_id);
            if($accessory){

                $totalquantity=$accessory->quantity-$sales_quantity;
                $accessory->update([
                'quantity' => $totalquantity,
                ]);

                return $accessory;
            }
        }
        catch(Exception $e){
            // dd($e);
        }
        

    }
}
