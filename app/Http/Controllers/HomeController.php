<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;


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
            Alert::success('Welcome To Dashboard', 'Thank You for Login Here ');
        return view('backend.home.home');
    }
        public function calendar()
    {
        return view('backend.calendar');
    }
}
