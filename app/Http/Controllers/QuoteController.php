<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Quote; // Import the Quote model

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
            'equipment' => 'required',
            'notes' => 'nullable|string',
        ]);

        Quote::create($validatedData); // Assuming you have a Quote model

        return redirect('/success')->with('success', 'Form submitted successfully!');
    }
}
