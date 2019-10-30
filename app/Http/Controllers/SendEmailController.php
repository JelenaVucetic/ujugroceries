<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function send(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
            ]);
        
        $data = array (
            'name' => $request->name,
            'message' => $request->message
        );

        Mail::to('info@ujunamirnice.me')->send(new SendMail($data));

        return back()->with('success', 'Hvala vam što ste nas kontaktirali!');
    }
}

