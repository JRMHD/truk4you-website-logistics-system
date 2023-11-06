<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeApplicationMail;

class EmployeeApplicationController extends Controller
{
    public function showForm()
    {
        return view('employeeApplication'); // Use the correct blade view
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            // Add validation rules here
        ]);

        // Create a new instance of the EmployeeApplication model
        $employeeApplication = new EmployeeApplication();

        // Set form data
        $employeeApplication->name = $request->input('name');
        $employeeApplication->license = $request->input('license');
        $employeeApplication->expiration = $request->input('expiration');
        $employeeApplication->endorsements = $request->input('endorsements');
        $employeeApplication->backgroundCheck = $request->input('backgroundCheck');
        $employeeApplication->workSchedule = $request->input('workSchedule');
        $employeeApplication->address = $request->input('address');
        $employeeApplication->phone = $request->input('phone');
        $employeeApplication->email = $request->input('email');
        $employeeApplication->experience = $request->input('experience');
        // Add more fields...

        // If a file was uploaded, store it and set the file path in the model
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $path = $file->store('uploads', 'public');
            $employeeApplication->resume = $path; // Assuming you have a 'resume' column in your model
        }

        // Save the data in the database
        $employeeApplication->save();

        // Send an email with the submitted data
        // Mail::to('letsroll@truk4you.com')->send(new EmployeeApplicationMail($employeeApplication));
        Mail::to('letsroll@truk4you.com')->send(new EmployeeApplicationMail($request->all()));


        return redirect()->route('employeeApplication')->with('success', 'Application Submitted Successfully');
    }
}
