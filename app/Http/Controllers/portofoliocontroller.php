<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portofoliocontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function contact()
    {
        return view('contact');
    }
}
