<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('statics.home');
    }

    public function dashboard()
    {
        return view('statics.dashboard');
    }

    public function example()
    {
        return view('examples.index');
    }
}
