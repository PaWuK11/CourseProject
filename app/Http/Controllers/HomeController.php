<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function homeback(): Factory|View|Application
    {
        return view('home');
    }

}
