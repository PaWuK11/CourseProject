<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function contact(): Factory|View|Application
    {
        return view('pub_info.contact');
    }

    /**
     * @param Request $request
     * @return View|Factory|Redirector|RedirectResponse|Application
     */
    public function send(Request $request): View|Factory|Redirector|RedirectResponse|Application
    {
        $request->validate([
            'fname'=>'required|string',
            'lname'=>'required|string',
            'email'=>'required|email',
            'tem'=>'required',
            'message'=>'required',
        ]);

        if ($request->method() == 'POST')
        {
            $body = "<p><b>Прізвище: </b> {$request->input('fname')}</p>";
            $body .= "<p><b>Ім'я: </b> {$request->input('lname')}</p>";
            $body .= "<p><b>Пошта: </b> {$request->input('email')}</p>";
            $body .= "<p><b>Тема: </b> {$request->input('tem')}</p>";
            $body .= "<p><b>Повідомлення: </b><br> " . nl2br($request->input('message')) . "</p>";

            Mail::to('mbfk@mail.com')->send(new ContactMail($body));

            return redirect('/contact');
        }
        return view('/contact');
    }
}

