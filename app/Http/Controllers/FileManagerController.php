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
        

            public function showSubFolders($folderId, $subfolderId = null)
                {
                    // Get the main root folder by its ID
                    $folder = Folder::findOrFail($folderId);

                    // Initialize $files and $subfolders as empty arrays by default
                    $files = [];
                    $subfolders = [];

                    // If subfolderId is provided, show the specific subfolder and its files
                    if ($subfolderId) {
                        // Get the specific subfolder by its ID
                        $subfolder = SubFolder::findOrFail($subfolderId);

                        // Check if the subfolder belongs to the specified root folder
                        if ($subfolder->parent_folder_id != $folderId) {
                            abort(404, 'Subfolder not found in this folder.');
                        }

                        // Get files associated with the subfolder if any
                        $files = File::where('folder_id', $subfolderId)->get();

                        // Retrieve nested subfolders of this subfolder, if any
                        $nestedSubfolders = SubFolder::where('parent_id', $subfolderId)->get();

                        // Return view with folder, subfolder, nested subfolders, and files
                        return view('folders.subfolders', compact('folder', 'subfolder', 'nestedSubfolders', 'files'));

                    } else {
                        // If no specific subfolder is requested, show all subfolders under the root folder
                        $subfolders = SubFolder::where('parent_folder_id', $folderId)->get();

                        // Return view with folder and its immediate subfolders
                        return view('folders.subfolders', compact('folder', 'subfolders', 'files'));
                    }
                }




                            // Create a subfolder under a parent folder
                            public function createSubFolder(Request $request, $parentFolderId)
                            {
                                // Validate the subfolder name
                                $request->validate([
                                    'name' => 'required|string|max:255'
                                ]);
                            
                                // Get the authenticated user
                                $user = User::findOrFail(Auth::id());
                                
                                
                               if($request->is_subfolder == true){
                                    // Find the parent folder in the database
                                $parentFolder = SubFolder::findOrFail($parentFolderId);
                                $parentsubfolder = $parentFolder->parent_folder_id;
                                $param = ['folderId' => $parentsubfolder, 'subfolderId' => $parentFolderId];
                               }else{
                                $parentFolder = Folder::findOrFail($parentFolderId);
                                $parentsubfolder = $parentFolder->id;
                                $param = ['folderId' => $parentsubfolder];
                               }
                                
                                
                                
                                // Helper function to construct the full path based on parent hierarchy
                                $fullPath = $this->getFullPath($parentFolder) . '/' . $request->name;
                            
                                // Create the directory in storage if it doesn't already exist
                                Storage::makeDirectory($fullPath);
                            
                                // Save subfolder in database
                                $subFolder = SubFolder::create([
                                    'name' => $request->name,
                                    'user_id' => $user->id,
                                    'parent_folder_id' => $parentsubfolder,
                                    'parent_id' => $parentFolderId,
                                    'path' => $fullPath
                                ]);

                                
                            
                                // Redirect back to show the newly created subfolder
                                return redirect()->route('folder.showSubFolders', $param )
                                                 ->with('success', 'Subfolder created successfully!');
                            }
                            
                            // Helper function to get full path recursively
                            private function getFullPath($folder)
                            {
                                if ($folder->parent_folder_id) {
                                    // Recursively build the path from parent folders
                                    $parentFolder = Folder::findOrFail($folder->parent_folder_id);
                                    return $this->getFullPath($parentFolder) . '/' . $folder->name;
                                } else {
                                    // Base folder path for user
                                    $user = User::findOrFail(Auth::id());
                                    return 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $folder->name;
                                }
                            }
                            


    
                // Upload a file
                public function uploadFile(Request $request)
                {
                   
                    $request->validate([
                        'file' => 'required|file|mimes:jpg,jpeg,png,PNG,pdf,docx,txt|max:2048',
                        'subfolder_id' => 'nullable|exists:sub_folder,id',
                        
                    ]);
                   
                    $file = $request->file('file');
                
                    // Default directory for private storage
                    $directory = null;
                
                    // Check if a folder ID is provided and fetch the folder name
                    if ($request->subfolder_id) {
                        $folder = SubFolder::find($request->subfolder_id);
                        $subfolder = Folder::find($folder->parent_folder_id);
                        if ($folder) {
                            // Append the folder's name to the directory path
                            $directory .= '/' . $folder->path;
                        }
                    }
                   
                    // Store the file in the private disk within the specified directory
                    $path = $file->store($directory, 'local'); // Specify 'local' to use the private disk
                
                    // Store file information in the database
                    File::create([
                        'name' => $file->getClientOriginalName(),
                        'path' => $path,
                        'user_id' => Auth::id(),
                        'folder_id' => $folder->parent_folder_id,
                        'subfolder_id' => $request->subfolder_id,
                    ]);

                    $files = File::find($folder->parent_folder_id);
                    
                    // print_r($files);
                    // exit;
                    
                     // Return view with folder and its immediate subfolders
                     return view('folders.subfolders', compact('subfolder', 'folder', 'files'));
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
