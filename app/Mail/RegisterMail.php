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
    public function __construct($_name,$_event)
    {
        $this->name = $_name;
        $this->event = $_event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_message = 'Dear '.$this->name.',Your registration for '.$this->event.' is successful.Please follow our website for payment and other details.';
        $e_subject = 'Registration Confirmation for ICT FEST';
        return $this->view('mail.RegisterMail',compact('e_message'))->subject($e_subject);
    }
}
