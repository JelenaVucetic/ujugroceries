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
       //dd($request);

        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'time' => 'required'
            ]);
        
        $order = array (
            'breadMessage' => $request->breadMessage,
            'milkMessage' => $request->milkMessage,
            'yogurtMessage' => $request->yogurtMessage,
            'papersMessage' => $request->papersMessage,
            'name' => $request->name,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'time' => $request->time,
            'autoTime' => $request->autoTime
            
        );

        //dd($order);
        Mail::to('poruci@ujunamirnice.me')->send(new OrderMail($order));

        return back()->with('success', 'Hvala vaša porudžbina je uspješna!');
    }
}

