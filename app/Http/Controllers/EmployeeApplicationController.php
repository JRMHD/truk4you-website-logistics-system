<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmployeeApplicationMail;

class EmployeeApplicationController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            // Add your validation rules here
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

        // Save the data in the database
        $employeeApplication->save();

        // Send an email with the submitted data (excluding the file)
        $data = $request->except(['_token', 'resume']);
        Mail::to('letsroll@truk4you.com')->send(new EmployeeApplicationMail($data));

        return redirect()->route('employeeApplication')->with('success', 'Application Submitted Successfully');
    }
}