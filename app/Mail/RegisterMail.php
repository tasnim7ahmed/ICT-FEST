<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $event;
    public $key;
    public function __construct($_name, $_event, $_key)
    {
        $this->name = $_name;
        $this->event = $_event;
        $this->key = $_key;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $e_subject = 'Registration Confirmation for IUT 10th ICT FEST';
        //return $this->view('mail.RegisterMail',compact('name','event','key'))->subject($e_subject);
        return $this->view('mail.RegisterMail')->with('name', $this->name)->with('event', $this->event)->with('key', $this->key)->subject($e_subject);
    }
}
