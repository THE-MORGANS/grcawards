<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JudgesRegister extends Mailable
{
    use Queueable, SerializesModels;

    // private $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( private $data){}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@grcfincrimeawards.com', 'GRC Awards Judges')->subject('Judges Registration Details')->view('emails.judgesRegister')->with('data',$this->data);
    }
}
