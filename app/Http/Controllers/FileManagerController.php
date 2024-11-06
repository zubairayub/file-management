<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileManagerController extends Controller
{
     // Display the file manager dashboard
     public function index()
     {
         $folders = Folder::where('user_id', Auth::id())->get();
         $files = File::where('user_id', Auth::id())->get();
         return view('file-manager.index', compact('folders', 'files'));
     }
 
     // Create a new folder
     public function createFolder(Request $request)
    {
        // Validate the folder name
        $request->validate(['name' => 'required|string|max:255']);

        // Create the folder in the file system (storage/app/public by default)
        $folderName = $request->name;
        $folderPath = 'files/' . $folderName;

        // Make sure the folder exists in the storage path
        Storage::makeDirectory($folderPath);

        // Save the folder information in the database
        $folder = Folder::create([
            'name' => $folderName,
            'user_id' => Auth::id(),
            'path' => $folderPath,  // Optionally store the folder path
        ]);

        // Redirect back to the file manager
        return redirect()->route('file-manager.index')->with('success', 'Folder created successfully!');
    }
 
     // Upload a file
     public function uploadFile(Request $request)
     {
         $request->validate([
             'file' => 'required|file|mimes:jpg,jpeg,png,pdf,docx,txt|max:2048',
             'folder_id' => 'nullable|exists:folders,id',
         ]);
     
         $file = $request->file('file');
     
         // Default directory for private storage
         $directory = 'files';
     
         // Check if a folder ID is provided and fetch the folder name
         if ($request->folder_id) {
             $folder = Folder::find($request->folder_id);
             if ($folder) {
                 // Append the folder's name to the directory path
                 $directory .= '/' . $folder->name;
             }
         }
     
         // Store the file in the private disk within the specified directory
         $path = $file->store($directory, 'local'); // Specify 'local' to use the private disk
     
         // Store file information in the database
         File::create([
             'name' => $file->getClientOriginalName(),
             'path' => $path,
             'user_id' => Auth::id(),
             'folder_id' => $request->folder_id,
         ]);
     
         return redirect()->route('file-manager.index');
     }
 
     // Delete a file
     public function deleteFile(File $file)
     {
         if ($file->user_id == Auth::id()) {
             Storage::delete('public/' . $file->path);
             $file->delete();
         }
 
         return redirect()->route('file-manager.index');
     }
 
     // Delete a folder
     public function deleteFolder(Folder $folder)
     {
         if ($folder->user_id == Auth::id()) {
             $folder->files->each(function ($file) {
                 Storage::delete('public/' . $file->path);
                 $file->delete();
             });
             $folder->delete();
         }
 
         return redirect()->route('file-manager.index');
     }
}
