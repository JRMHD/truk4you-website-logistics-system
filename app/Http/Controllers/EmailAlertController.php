<?php

namespace App\Http\Controllers;

use App\Models\EmailAlert;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailAlertNotification;
use Illuminate\Http\Request;

class EmailAlertController extends Controller
{
    public function showOwnerForm()
    {
        $emailAlerts = EmailAlert::all();

        return view('owner.email-alert-form', compact('emailAlerts'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'recipient' => 'required|email',
            'message' => 'required|string',
            'frequency' => 'required|in:1,2,4,8,24,48',
            'is_active' => 'required|boolean',
            'reminderMessage' => 'required|string', // New validation rule
        ]);

        $emailAlert = EmailAlert::create([
            'recipient' => $request->input('recipient'),
            'message' => $request->input('message'),
            'frequency' => $request->input('frequency'),
            'is_active' => $request->input('is_active'),
            'reminder_message' => $request->input('reminderMessage'),



        ]);

        // Send the first email alert immediately with the custom reminder message
        $this->sendImmediateEmailAlert($emailAlert, $request->input('reminderMessage'));

        return redirect()->back()->with('success', 'Alert sent and scheduled successfully.');
    }

    protected function sendImmediateEmailAlert(EmailAlert $emailAlert, $reminderMessage)
    {
        $this->sendEmailAlert($emailAlert->recipient, $emailAlert->message, $reminderMessage);

        // Update the last sent timestamp
        $emailAlert->update(['updated_at' => now()]);
    }

    public function toggleStatus($id)
    {
        $emailAlert = EmailAlert::findOrFail($id);
        $emailAlert->update(['is_active' => !$emailAlert->is_active]);

        return redirect()->back()->with('success', 'Email alert status toggled successfully.');
    }

    protected function sendEmailAlert($recipient, $message, $reminderMessage)
    {
        // You can customize the email notification as per your design
        $data = ['message' => $message, 'reminderMessage' => $reminderMessage];
        Mail::to($recipient)->send(new EmailAlertNotification($data));
    }
}
