<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application as ApplicationAlias;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * @return Factory|View|ApplicationAlias
     */
    public function teacher(): Factory|View|ApplicationAlias
    {
        return view('teacher.teacher');
    }

    /**
     * @return Factory|View|ApplicationAlias
     */
    public function metodi_material(): Factory|View|ApplicationAlias
    {
        return view('teacher.metodi_material');
    }
}
