<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

use App\Mail\SubscriptionConfirmationSubscriber;
use App\Mail\SubscriptionConfirmationAdmin;

class NewsletterSubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscriptions',
        ]);

        // Create a new subscription
        $subscription = NewsletterSubscription::create([
            'email' => $request->input('email'),
            // Add other fields if needed
        ]);

        // Send confirmation email to subscriber
        Mail::to($subscription->email)->send(new SubscriptionConfirmationSubscriber($subscription));

        // Send confirmation email to admin
        Mail::to('letsroll@truk4you.com')->send(new SubscriptionConfirmationAdmin($subscription));

        return redirect()->back()->with('success', 'Subscription successful. Thanks for being part of our team!');
    }
}
