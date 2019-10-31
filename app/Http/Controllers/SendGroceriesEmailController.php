<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\GroceriesMail;

class SendGroceriesEmailController extends Controller
{
    public function send(Request $request) 
    {  
         $this->validate($request, [
             'test' => 'required'
             ]);
        
         $groceries = array (
             'test' => $request->test,
         );


        Mail::to('poruci@ujunamirnice.me')->send(new GroceriesMail($groceries));

        return back()->with('success', 'Hvala vaša porudžbina je uspješna!');
    }
}
