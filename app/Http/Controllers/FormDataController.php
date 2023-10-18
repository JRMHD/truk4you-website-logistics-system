<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormDataController extends Controller
{
    public function create()
    {
        return view('quote');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pickupLocation' => 'required|string',
            'pickupDateTime' => 'required|date',
            'deliveryLocation' => 'required|string',
            'deliveryDateTime' => 'required|date',
            'equipmentType' => 'required|string',
            'loadType' => 'required|string',
            'loadDimensions' => 'required|string',
            'commodityDescription' => 'required|string',
            'contactName' => 'required|string',
            'contactPhone' => 'required|string',
            'contactEmail' => 'required|email',
            'loadDoc' => 'nullable|file|mimes:pdf',
        ]);
        // Create a new instance of the FormData model and fill it with validated data
        $formData = new FormData;
        $formData->fill($validatedData);

        // If a file was uploaded, store it and set the file path in the model
        if ($request->hasFile('loadDoc')) {
            $file = $request->file('loadDoc');
            $path = $file->store('uploads', 'public');
            $formData->loadDocPath = $path;
        }

        // Save the data in the database
        $formData->save();

        // Redirect to a thank you page or show a success message
        return redirect()->route('thankyou'); // Replace 'thankyou' with the actual route or view name
    }
}
