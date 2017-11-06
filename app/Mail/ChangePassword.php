<?php

namespace App\Mail;

/*
   Filename:     RegisterController.php
   Creator:      Laravel
   Create Date:  20171018
   Purpose:      Directs to view for building an e-mail and passing variables into the content of that email.
   Log:
                 20171018:    Added user variable for personalized auto generated emails.//AC
                              Added link to view with content of email.//AC

*/


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class ChangePassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Any public property defined on this page will be available for the view.  Use this to add random generated code
     * to email
     */
    public $user;



    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct(User $user)
    {
        $this->user = $user;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.change-password');
    }
}
