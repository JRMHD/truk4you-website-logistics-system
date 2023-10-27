<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // This will hold the data for your email

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data; // Pass the data to the email
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->view('emails.contact') // The view file for your email
    //                 ->subject('Contact Form Mail') // Subject of the email
    //                 ->from('sender@example.com'); // Set the sender email address
    // }
    public function build()
{
    $data = $this->data;

//    dd($data);
    return $this->view('contact-form-email')
        ->with($data);
        // [
        //     'name' => $this->data['name'],
        //     'email' => $this->data['email'],
        //     'subject' => $this->data['subject'],
        //     'message' => $this->data['message'],
        // ]
}

}
