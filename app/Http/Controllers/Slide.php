<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\booking;

class Slide extends Controller
{
    public function profe()
    {
        // dd('21');
        return view('user3');
    }

    public function ex1()
    {
        
        // dd($data);
        return view('aboutUs');
    }

    public function ex2()
    {
        
        // dd($data);
        return view('welcome');
    }
    public function con()
    {
        
        // dd($data);
        return view('contactUs');
    }

    public function ex5()
    {
        
        // dd($data);
        return view('terms');
    }

    public function ex4()
    {
        
        // dd($data);
        return view('policy');
    }
}
