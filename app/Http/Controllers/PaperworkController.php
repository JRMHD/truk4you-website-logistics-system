<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class PaperworkController extends Controller
{
    public function downloadFile1()
    {
        $pdfFile = storage_path('documents/aug 2023 w9.pdf');
        $fileName = 'aug 2023 w9.pdf';

        if (File::exists($pdfFile)) {
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $fileName . '"',
            ];

            return Response::make(File::get($pdfFile), 200, $headers);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }

    public function downloadFile2()
    {
        $pdfFile = storage_path('documents/Operating Authority MC number.pdf');
        $fileName = 'Operating_Authority_MC_number.pdf';

        if (File::exists($pdfFile)) {
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $fileName . '"',
            ];

            return Response::make(File::get($pdfFile), 200, $headers);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }
}