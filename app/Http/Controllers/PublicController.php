<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function timetable(): Factory|View|Application
    {
        return view('pub_info.timetable');
    }

    /**
     * @return Factory|View|Application
     */
    public function collage_life(): Factory|View|Application
    {
        return view('pub_info.collage_life');
    }
    /**
     * @return Factory|View|Application
     */
    public function library(): Factory|View|Application
    {
        return view('pub_info.library');
    }
    /**
     * @return Factory|View|Application
     */
    public function corruption(): Factory|View|Application
    {
        return view('pub_info.corruption');
    }
    /**
     * @return Factory|View|Application
     */
    public function prospect(): Factory|View|Application
    {
        return view('pub_info.prospect');
    }
}
