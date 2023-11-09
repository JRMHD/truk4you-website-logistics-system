<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData; // Import the FormData model
use Illuminate\Support\Facades\Mail;
use App\Mail\FreightQuoteMail;

class FormDataController extends Controller
{
    public function create()
    {
        return view('quote');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
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

        // Create a new instance of the FormData model
        $formData = new FormData;

        // Set properties on the $formData object
        $formData->pickupLocation = $request->input('pickupLocation');
        $formData->pickupDateTime = $request->input('pickupDateTime');
        $formData->deliveryLocation = $request->input('deliveryLocation');
        $formData->deliveryDateTime = $request->input('deliveryDateTime');
        $formData->equipmentType = $request->input('equipmentType');
        $formData->loadType = $request->input('loadType');
        $formData->loadDimensions = $request->input('loadDimensions');
        $formData->commodityDescription = $request->input('commodityDescription');
        $formData->contactName = $request->input('contactName');
        $formData->contactPhone = $request->input('contactPhone');
        $formData->contactEmail = $request->input('contactEmail');

        // If a file was uploaded, store it and set the file path in the model
        if ($request->hasFile('loadDoc')) {
            $file = $request->file('loadDoc');
            $path = $file->store('uploads', 'public');
            $formData->loadDocPath = $path;
        }

        // Save the data in the database
        $formData->save();

        // Send an email with the submitted data (excluding the file)
        $emailData = $formData->toArray();
        unset($emailData['loadDocPath']); // Remove the loadDocPath from the email data
        Mail::to('letsroll@truk4you.com')->send(new FreightQuoteMail($emailData));

        // Redirect to a thank you page or show a success message
        return redirect()->route('quote')->with('success', 'Quote Request Submitted Successfully');
    }
}
