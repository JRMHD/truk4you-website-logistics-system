<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class PaperworkController extends Controller


{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function downloadFiles(Request $request)
    {
        // Check if the user is logged in or authenticated (you may need to customize this)
        if (auth()->check()) {
            // Define the file paths and their original names
            $filePaths = [
                'file1' => 'storage/app/public/aug 2023 w9.pdf',
                'file2' => 'storage/app/public/Operating Authority MC number.pdf',
            ];

            // Zip the files into a single archive
            $zipFile = storage_path('app/public/paperwork.zip');
            $zip = new \ZipArchive;
            $zip->open($zipFile, \ZipArchive::CREATE);

            foreach ($filePaths as $alias => $path) {
                $zip->addFile(storage_path('app/' . $path), $alias . '.pdf');
            }

            $zip->close();

            // Define the file download response
            $headers = [
                'Content-Type' => 'application/zip',
                'Content-Disposition' => 'attachment; filename="paperwork.zip"',
            ];

            return response()->download($zipFile, 'paperwork.zip', $headers);
        } else {
            return redirect()->route('login'); // Redirect to the login page if the user is not authenticated
        }
    }
}
