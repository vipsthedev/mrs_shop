<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyItemController extends Controller
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
        return view('/buy/index');
    }
    
    public function create()
    {
        return view('/buy/add');
    }
    public function store(Request $request)
    {
        return view('/buy/index');
    }
}
