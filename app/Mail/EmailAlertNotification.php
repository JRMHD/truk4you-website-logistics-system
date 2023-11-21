<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailAlertNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $emailMessage;
    public $companyLink;
    public $reminderMessage; // Add this line

    public function __construct($data)
    {
        $this->emailMessage = $data['message'];
        $this->companyLink = 'https://truk4you.com';
        $this->reminderMessage = $data['reminderMessage']; // Add this line
    }

    public function build()
    {
        return $this->subject('Email Alert')->view('emails.email-alert-notification');
    }
}
