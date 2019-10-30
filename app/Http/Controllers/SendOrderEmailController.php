<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\OrderMail;

class SendOrderEmailController extends Controller
{
    public function send(Request $request) 
    {
       
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'email' => 'required|email',
            'time' => 'required'
            ]);
        
        $order = array (
            'name' => $request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'time' => $request->time,
            'autoTime' => $request->autoTime
        );

        Mail::to('poruci@ujunamirnice.me')->send(new OrderMail($order));

        return back()->with('success', 'Hvala vaša porudžbina je uspješna!');
    }
}

