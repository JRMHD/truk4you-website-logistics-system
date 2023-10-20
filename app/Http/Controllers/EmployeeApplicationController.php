<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeApplication; // Replace with your model name

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
        // $employeeApplication->resume = $request->input('resume');
        // $employeeApplication->form-check = $request->input('form-check');

        
        
        // Add more fields...

        // If a file was uploaded, store it and set the file path in the model
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $path = $file->store('uploads', 'public');
            $employeeApplication->resumePath = $path; // Assuming you have a 'resumePath' column in your model
        }

        // Save the data in the database
        $employeeApplication->save();

        return redirect()->route('employeeApplication')->with('success', 'Application Submitted Successfully');
    }
}
