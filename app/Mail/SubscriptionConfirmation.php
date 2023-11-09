<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\NewsletterSubscription;

class SubscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $subscription;

    public function __construct(NewsletterSubscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function build()
    {
        return $this->view('emails.subscription-confirmation')
            ->subject('Subscription Confirmation');
    }
}
