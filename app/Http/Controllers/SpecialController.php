<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function at(): View|Factory|Application
    {
        return view('special.at');
    }

    /**
     * @return Factory|View|Application
     */
    public function built(): Factory|View|Application
    {
        return view('special.built');
    }
    /**
     * @return Factory|View|Application
     */
    public function design(): Factory|View|Application
    {
        return view('special.design');
    }

    /**
     * @return Factory|View|Application
     */
    public function ek(): Factory|View|Application
    {
        return view('special.ek');
    }
}
