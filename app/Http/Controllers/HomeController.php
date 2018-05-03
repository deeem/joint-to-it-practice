<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function charts()
    {
        return view('admin.charts');
    }

    public function tables()
    {
        return view('admin.tables');
    }

    public function navbar()
    {
        return view('admin.navbar');
    }

    public function cards()
    {
        return view('admin.cards');
    }

    public function map()
    {
        return view('admin.map');
    }
}
