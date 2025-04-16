<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesItemController extends Controller
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
        return view('/sales/index');
    }

    public function create()
    {
        return view('/sales/add');
    }
    public function store(Request $request)
    {
        return view('/category/index');
    }
}
