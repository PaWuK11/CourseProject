<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function documents_9()
    {
        return view('applicant.documents_9');
    }

    public function documents_11()
    {
        return view('applicant.documents_11');
    }

    public function documents_PTU()
    {
        return view('applicant.documents_PTU');
    }

    public function Donbas()
    {
        return view('applicant.DonbasIsUkraine');
    }

    public function Crimea()
    {
        return view('applicant.CrimeaIsUkraine');
    }

    public function decision()
    {
        return view('applicant.decision');
    }

    public function cost()
    {
        return view('applicant.cost');
    }
}
