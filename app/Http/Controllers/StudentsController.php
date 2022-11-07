<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function stud_metod_material(): Factory|View|Application
    {
        return view('students.stud_metod_material');
    }

    /**
     * @return Factory|View|Application
     */
    public function day_department(): Factory|View|Application
    {
        return view('students.day_department');
    }

    /**
     * @return Factory|View|Application
     */
    public function night_department(): Factory|View|Application
    {
        return view('students.night_department');
    }
}

