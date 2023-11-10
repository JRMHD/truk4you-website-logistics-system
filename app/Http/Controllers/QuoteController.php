<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Quote; // Import the Quote model
// use App\Quote; // Import the Quote model
use App\Mail\QuoteFormMail;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    // Display the form
    public function showForm()
    {
        return view('quote-form');
    }

    // Process and store form submissions
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'mobile' => 'required|string|max:20',
        'equipment' => 'nullable',
        'originatingCityState' => 'nullable|string', // New field
        'destinationCityState' => 'nullable|string', // New field
        'shipByDate' => 'nullable|string', // New field
        'notes' => 'required|string',
    ]);

    Quote::create($validatedData);

    // Send an email with the submitted form data
    Mail::to('letsroll@truk4you.com')
        ->send(new QuoteFormMail($validatedData));

    return redirect('/success')->with('success', 'Form submitted successfully!');
}

}
