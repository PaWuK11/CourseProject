<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ApplicantController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function documents_9(): Factory|View|Application
    {
        return view('applicant.documents_9');
    }

    /**
     * @return Factory|View|Application
     */
    public function documents_11(): Factory|View|Application
    {
        return view('applicant.documents_11');
    }

    /**
     * @return Factory|View|Application
     */
    public function documents_PTU(): Factory|View|Application
    {
        return view('applicant.documents_PTU');
    }

    /**
     * @return Application|Factory|View
     */
    public function Donbas(): View|Factory|Application
    {
        return view('applicant.DonbasIsUkraine');
    }

    /**
     * @return Application|Factory|View
     */
    public function Crimea(): View|Factory|Application
    {
        return view('applicant.CrimeaIsUkraine');
    }

    /**
     * @return Application|Factory|View
     */
    public function decision(): View|Factory|Application
    {
        return view('applicant.decision');
    }

    /**
     * @return Application|Factory|View
     */
    public function cost(): View|Factory|Application
    {
        return view('applicant.cost');
    }
}
