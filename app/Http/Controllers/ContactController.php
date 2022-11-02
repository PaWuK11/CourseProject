<?php

namespace App\Http\Controllers;


use App\Mail\Send;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('pub_info.contact');
    }

    public function send(Request $request)
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
        }

        Mail::to('bodya@mail.com')->send(new Send($body));
        $request->session()->flash('success','Negro');

        return view('send');
    }
}

