<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function timetable()
    {
        return view('pub_info.timetable');
    }

    public function collage_life()
    {
        return view('pub_info.collage_life');
    }

    public function library()
    {
        return view('pub_info.library');
    }

    public function corruption()
    {
        return view('pub_info.corruption');
    }

    public function prospect()
    {
        return view('pub_info.prospect');
    }
}
