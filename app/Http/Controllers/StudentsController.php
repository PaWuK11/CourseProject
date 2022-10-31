<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function stud_metod_material(){
        return view('students.stud_metod_material');
    }

    public function day_department()
    {
        return view('students.day_department');
    }

    public function night_department()
    {
        return view('students.night_department');
    }
}

