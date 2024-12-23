<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function uploadPDF(Request $request)
    {
        // Validate the request
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:5120', // Max 5MB
        ]);

        // Store the file on the server
        $filePath = $request->file('pdf')->store('pdfs', 'public');

        return response()->json([
            'message' => 'PDF uploaded successfully!',
            'file_path' => Storage::url($filePath),
        ]);
    }
}
