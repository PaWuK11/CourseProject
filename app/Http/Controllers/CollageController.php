<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CollageController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function history(): View|Factory|Application
    {
        return view('collage.history');
    }

    public function admin_staff()
    {
        return view('collage.admin_staff');
    }

    public function cyclical_commission()
    {
        return view('collage.cyclical_commission');
    }

    public function structural()
    {
        return view('collage.structural');
    }

    public function specialties()
    {
        return view('collage.specialties');
    }

    public function psychological()
    {
        return view('collage.psychological');
    }

    public function licenses()
    {
        return view('collage.licenses');
    }

    public function directors_report()
    {
        return view('collage.directors_report');
    }

    public function accreditation_materials()
    {
        return view('collage.accreditation_materials');
    }

    public function educational_activities()
    {
        return view('collage.educational_activities');
    }
}
