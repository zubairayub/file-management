<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\File;
use App\Models\User;
use App\Models\SubFolder;
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
                $folderPath = $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) .'/'. $folderName ;

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
        

            // Show subfolders of a particular folder or a specific subfolder if requested
            public function showSubFolders($folderId, $subfolderId = null)
            {
                // Get the folder by its ID
                $folder = Folder::findOrFail($folderId);

                // Initialize $files as an empty array by default
                $files = [];

                // If subfolderId is provided, show the specific subfolder
                if ($subfolderId) {
                    // Get the specific subfolder by its ID
                    $subfolder = SubFolder::findOrFail($subfolderId);

                    // Optionally, get files or other data associated with the subfolder
                    $files = File::where('folder_id', $subfolderId)->get(); // Adjust if needed

                    // Return the view for the specific subfolder with folder, subfolder, and files data
                    return view('folders.subfolders', compact('folder', 'subfolder', 'files'));
                } else {
                    // Otherwise, show the list of subfolders for the folder
                    $subfolders = SubFolder::where('parent_folder_id', $folderId)->get();

                    // Return the view with folder and its subfolders
                    return view('folders.subfolders', compact('folder', 'subfolders', 'files'));
                }
            }



                            // Create a subfolder under a parent folder
                public function createSubFolder(Request $request, $parentFolderId)
                {
                    // Validate the subfolder name and ensure it's not empty
                    $request->validate([
                        'name' => 'required|string|max:255'
                    ]);
                    
                    // Fetch the user information using the authenticated user's ID
                    $user = User::findOrFail(Auth::id());
                    
                    // Find the parent folder to associate the subfolder with
                    $parentFolder = Folder::findOrFail($parentFolderId);

                    // Create a new folder in the file system (storage/app/public by default)
                    $subFolderName = $request->name;
                    $subFolderPath = $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) .'/'. $parentFolder->name .'/'. $subFolderName;

                    // Make sure the subfolder exists in the storage path
                    Storage::makeDirectory($subFolderPath);

                    // Save the subfolder information in the database
                    $subFolder = SubFolder::create([
                        'name' => $subFolderName,
                        'user_id' => $user->id,  // Use the logged-in user ID
                        'parent_folder_id' => $parentFolderId,  // Link to the immediate parent folder
                        'parent_id' => $parentFolder->parent_folder_id, // Link to the higher-level parent folder (if needed)
                        'path' => $subFolderPath  // Save the path
                    ]);

                    // Redirect to the specific subfolder URL after creation
                    return redirect()->route('folder.showSubFolders', ['folderId' => $parentFolderId, 'subfolderId' => $subFolder->id])
                                    ->with('success', 'Subfolder created successfully!');
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
