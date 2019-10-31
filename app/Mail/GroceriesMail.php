<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GroceriesMail extends Mailable
{
    use Queueable, SerializesModels;

    public $groceries;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($groceries)
    {
       $this->groceries = $groceries;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@ujunamirnice.me')->subject('Order Mail')->view('mails.groceries_email_template')->with('groceries', $this->groceries);
    }
}
