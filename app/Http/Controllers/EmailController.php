<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailRequest;
use App\Repositories\EmailRepository;
use App\Repositories\EmailRepositoryInterface;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function store(EmailRequest $request, EmailRepositoryInterface $emailRepository)
    {
        $emailRepository->save($request->email);

        return view('email_ok');
    }
}
