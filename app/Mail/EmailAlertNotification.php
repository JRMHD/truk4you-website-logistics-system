<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailAlertNotification extends Mailable
{
    use SerializesModels;

    public $emailMessage;
    public $companyLink;

    public function __construct($data)
    {
        $this->emailMessage = $data['message'];
        $this->companyLink = 'https://truk4you.com'; // Add the link to your company here
    }

    public function build()
    {
        return $this->subject('Email Alert')->view('emails.email-alert-notification');
    }
}
