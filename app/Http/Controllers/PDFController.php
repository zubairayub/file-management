<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\SubFolder;
use App\Models\Folder;
use App\Models\File;


class PDFController extends Controller
{
    public function uploadPDF(Request $request)
    {
        // Validate the request
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:5120', // Max 5MB
        ]);
        $user = Auth::user();
        $currentYear = Carbon::now()->year;
        $currentDate = Carbon::now()->format('dmy'); // Get current date in "dmy" format
        $defaultFolder = 'Business Formation';
        // Create the folder in the file system (storage/app/public by default)

        // Define the folder path
        $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $defaultFolder . '/' . $currentYear;

        // Check if the folder exists in the 'sub_folder' table
        $subFolder = SubFolder::where('path', $folderPath)
            ->where('user_id', $user->id)
            ->first();


        // Check if the folder exists in the 'folder' table for the given user
        $folder = Folder::where('user_id', $user->id)
            ->where('name', $defaultFolder)
            ->first(); // Retrieve the first matching record

        if ($subFolder) {
            // Folder exists, retrieve the data
            // You can now access the $subFolder object to get the data, e.g., $subFolder->data
            // For example, you can use: $subFolder->name, $subFolder->created_at, etc.
            // You can return or use the data as needed
            $subFolder;

        } else {

            // Folder doesn't exist, so create it in the storage
            Storage::makeDirectory($folderPath);

            // Save each subfolder in the database
            $subFolder = SubFolder::create([
                'name' => (string) $currentYear,
                'user_id' => $user->id,
                'parent_folder_id' => $folder->id, // Link to the main folder
                'path' => $folderPath,      // Store subfolder path
            ]);

            // Return or use the created $subFolder object
            $subFolder;
        }

        // Make sure the folder exists in the storage path
        Storage::makeDirectory($folderPath);
        
        // Get the original file name
        $originalFileName = $request->file('pdf')->getClientOriginalName();

        // Generate a new file name by appending the current "dmy" date format
        $newFileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '_' . $currentDate . '.' . $request->file('pdf')->getClientOriginalExtension();

        // Store the file on the server with the new name
        $filePath = $request->file('pdf')->storeAs($folderPath, $newFileName, 'local');

        if ($filePath) {

            File::create([
                'name' => $newFileName,
                'path' => $filePath,
                'user_id' => $user->id,
                'folder_id' => $folder ? $folder->id : null,
                'subfolder_id' => $subFolder ? $subFolder->id : null,
            ]);

        }


        return response()->json([
            'message' => 'PDF uploaded successfully!',
            'file_path' => Storage::url($filePath),
        ]);
    }
}
