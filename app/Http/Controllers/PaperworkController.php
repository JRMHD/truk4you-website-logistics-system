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
        $zip_file = 'paperwork.zip';
        $zip = new \ZipArchive();
        $zip->open($zip_file, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

        $path = storage_path('documents');
// dd($path);
        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        foreach ($files as $name => $file) {
            // We're skipping all subfolders
            if (!$file->isDir()) {
                $filePath     = $file->getRealPath();

                // extracting filename with substr/strlen
                $relativePath = 'paperwork/' . substr($filePath, strlen($path) + 1);
                $zip->addFile($filePath, $relativePath);
            }
        }
        $zip->close();
        return response()->download($zip_file);
        // Check if the user is logged in or authenticated 
        // if (auth()->check()) {
        //     // Define the file paths and their original names
        //     $filePaths = [
        //         'file1' => 'documents\aug 2023 w9.pdf',
        //         'file2' => 'documents\Operating Authority MC number.pdf',
        //     ];

        //     // Zip the files into a single archive
        //     $zipFile = storage_path('paperwork.zip');
        //     $zip = new \ZipArchive;
        //     $zip->open($zipFile, \ZipArchive::CREATE);

        //     foreach ($filePaths as $alias => $path) {
        //         $zip->addFile(storage_path($path), $alias . '.pdf');
        //         // $zip->addFile(storage_path('app/' . $path), $alias . '.pdf');
        //     }

        //     $zip->close();

        //     // Define the file download response
        //     $headers = [
        //         'Content-Type' => 'application/zip',
        //         'Content-Disposition' => 'attachment; filename="paperwork.zip"',
        //     ];

        //     return response()->download($zipFile, 'paperwork.zip', $headers);
        // } else {
        //     return redirect()->route('login'); // Redirect to the login page if the user is not authenticated
        // }
        // its working now..
    }
}
