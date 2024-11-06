<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RemiderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('event@grcfincrimeawards.com', 'GRC Awards 2024')->subject($this->data['subject'])->view('contents.mails.reminderMail')->with('data', $this->data)
        ->attachFromStorage(asset('assets/2024GRCINVITATION.pdf'), 'GRC_Invitation.pdf', 
        ['mimes' => 'application/pdf']);
    }
}
