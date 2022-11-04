<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialController extends Controller
{
    public function at()
    {
        return view('special.at');
    }
    public function built()
    {
        return view('special.built');
    }
    public function design()
    {
        return view('special.design');
    }
    public function ek()
    {
        return view('special.ek');
    }
}
