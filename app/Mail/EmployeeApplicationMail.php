<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use PhpParser\Node\Expr\Cast\String_;

class EmployeeApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    // public function content()
    // {
    //     return new Content(
    //         view: 'emails.employee-application',
    //         data: $this->data
    //     );
    // }
    //  I THINK ITS OKAY NOW!
    public function content()
    {
        return new Content(
            view: 'emails.employee-application',
            // $this->data = $data;
        );
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    // WHAT IS THE

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from(config('mail.from.address'))
            ->subject('New Employee Application Submission')
            ->markdown('emails.employee-application')
            ->with('data', $this->data);
            // ->attachFromStorage($this->data['resume'], 'application.pdf');
    }
}
