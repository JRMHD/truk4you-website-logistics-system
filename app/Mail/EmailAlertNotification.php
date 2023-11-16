<?php

namespace App\Mail;

// app/Mail/EmailAlertNotification.php

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailAlertNotification extends Mailable
{
    use SerializesModels;

    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function build()
    {
        return $this->subject('Email Alert')->view('emails.email-alert-notification');
    }
}
