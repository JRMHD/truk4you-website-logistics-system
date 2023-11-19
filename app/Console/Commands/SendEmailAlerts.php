<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\EmailAlert;
use App\Http\Controllers\EmailAlertController;

class SendEmailAlerts extends Command
{
    protected $signature = 'email-alerts:send';
    protected $description = 'Send email alerts to recipients';

    public function handle(EmailAlertController $emailAlertController)
    {
        $emailAlerts = EmailAlert::where('is_active', true)->get();

        foreach ($emailAlerts as $emailAlert) {
            $frequencyInMinutes = $emailAlert->frequency * 60;

            if ($emailAlert->updated_at->addMinutes($frequencyInMinutes)->isPast()) {
                // Send email alert using the resolved EmailAlertController
                $emailAlertController->sendEmailAlert($emailAlert->recipient, $emailAlert->message);

                // Update the last sent timestamp
                $emailAlert->update(['updated_at' => now()]);
            }
        }

        $this->info('Email alerts sent successfully.');
    }
}
