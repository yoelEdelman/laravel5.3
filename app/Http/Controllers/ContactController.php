<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }


    public function store(ContactRequest $request)
    {
        Mail::to('yoeledelman@gmail.com')
            ->send(new Contact($request->except('_token')));

        return view('confirm');
    }
}
