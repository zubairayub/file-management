<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use App\Models\File;
use App\Models\User;
use App\Models\SubFolder;
use App\Models\Package;
use App\Models\UserPackage;
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
        $user = Auth::user();

        // Create the folder in the file system (storage/app/public by default)
        $folderName = $request->name;
        $folderPath = $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $folderName;

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


    // public function showSubFolders($folderId, $subfolderId = null)
    //     {
    //         // Get the main root folder by its ID
    //         $folder = Folder::findOrFail($folderId);

    //         // Initialize $files and $subfolders as empty arrays by default
    //         $files = [];
    //         $subfolders = [];

    //         // If subfolderId is provided, show the specific subfolder and its files
    //         if ($subfolderId) {
    //             // Get the specific subfolder by its ID
    //             $subfolder = SubFolder::findOrFail($subfolderId);

    //             // Check if the subfolder belongs to the specified root folder
    //             if ($subfolder->parent_folder_id != $folderId) {
    //                 abort(404, 'Subfolder not found in this folder.');
    //             }

    //             // Get files associated with the subfolder if any
    //             $files = File::where('folder_id', $subfolderId)->get();

    //             // Retrieve nested subfolders of this subfolder, if any
    //             $nestedSubfolders = SubFolder::where('parent_id', $subfolderId)->get();

    //             // Return view with folder, subfolder, nested subfolders, and files
    //             return view('folders.subfolders', compact('folder', 'subfolder', 'nestedSubfolders', 'files'));

    //         } else {
    //             // If no specific subfolder is requested, show all subfolders under the root folder
    //             $subfolders = SubFolder::where('parent_folder_id', $folderId)->get();

    //             // Return view with folder and its immediate subfolders
    //             return view('folders.subfolders', compact('folder', 'subfolders', 'files'));
    //         }
    //     }

    public function showSubFolders($folderId, $subfolderId = null)
    {
        // Get the main root folder by its ID
        $folder = Folder::findOrFail($folderId);

        $subfolderIdmain = $subfolderId;

        $folderIdmain = $folderId;

        // Determine if it's a subfolder scenario
        $isSubfolder = $subfolderId ? 1 : 0;



        // Initialize $files, $subfolders, and $nestedSubfolders as empty collections by default
        $files = collect();  // Default to an empty collection
        $subfolders = [];
        $nestedSubfolders = collect(); // Default to an empty collection

        // If subfolderId is provided, show the specific subfolder and its files
        if ($subfolderId) {
            // Get the specific subfolder by its ID
            $subfolder = SubFolder::findOrFail($subfolderId);

            // Check if the subfolder belongs to the specified root folder
            if ($subfolder->parent_folder_id != $folderId) {
                abort(404, 'Subfolder not found in this folder.');
            }

            // Get files associated with the subfolder if any
            $files = $subfolder->files;  // Using the relationship to get files

            // Retrieve nested subfolders of this subfolder, if any
            $nestedSubfolders = $subfolder->children;  // Use the `children()` relationship

            // Return view with folder, subfolder, nested subfolders, and files
            return view('folders.subfolders', compact('folder', 'subfolder', 'nestedSubfolders', 'files', 'isSubfolder', 'subfolderIdmain', 'folderIdmain'));

        } else {
            // If no specific subfolder is requested, show all subfolders under the root folder
            $subfolders = SubFolder::where('parent_folder_id', $folderId)
                ->Where('parent_id', null)
                ->get();

            // Return view with folder and its immediate subfolders
            return view('folders.subfolders', compact('folder', 'subfolders', 'nestedSubfolders', 'files', 'isSubfolder', 'subfolderIdmain', 'folderIdmain'));
        }
    }


    // Ensure the user is authenticated before accessing the file
    public function downloadFile($file_id)
    {
        // Check if the user is logged in
        if (!auth()->check()) {
            return redirect()->route('login');  // Redirect to login page if not logged in
        }

        // Retrieve the file record from the database using the file_id
        $file = File::find($file_id);

        // Check if the file exists and if the logged-in user is the owner
        if (auth()->user()->role !== 'admin') {
            if (!$file || $file->user_id != auth()->id()) {
                abort(403); // Forbidden if the user does not own the file
            }
        }


        // Construct the file path using the information from the database
        $filePath = storage_path('app/private/' . $file->path); // Adjust this path based on your storage setup

        // Check if the file exists on the server
        if (!file_exists($filePath)) {
            abort(404); // Return a 404 error if the file doesn't exist
        }

        // Return the file as a download response
        return response()->download($filePath, $file->name);
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


        if ($request->is_subfolder == true) {
            // Find the parent folder in the database
            $parentFolder = SubFolder::findOrFail($parentFolderId);
            $parentsubfolder = $parentFolder->parent_folder_id;
            $param = ['folderId' => $parentsubfolder, 'subfolderId' => $parentFolderId];
        } else {
            $parentFolder = Folder::findOrFail($parentFolderId);
            $parentFolderId = null;
            $parentsubfolder = $parentFolder->id;
            $param = ['folderId' => $parentsubfolder];
        }



        // Helper function to construct the full path based on parent hierarchy
        $fullPath = getFullPath($parentFolder) . '/' . $request->name;

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
        return redirect()->route('folder.showSubFolders', $param)
            ->with('success', 'Subfolder created successfully!');
    }






    // Upload a file
    // public function uploadFile(Request $request)
    // {

    //     $request->validate([
    //         'file' => 'required|file|mimes:jpg,jpeg,png,PNG,pdf,docx,txt|max:2048',
    //         'subfolder_id' => 'nullable|exists:sub_folder,id',

    //     ]);

    //     $file = $request->file('file');

    //     // Default directory for private storage
    //     $directory = null;

    //     // Check if a folder ID is provided and fetch the folder name
    //     if ($request->subfolder_id) {
    //         $folder = SubFolder::find($request->subfolder_id);
    //         $subfolder = Folder::find($folder->parent_folder_id);
    //         if ($folder) {
    //             // Append the folder's name to the directory path
    //             $directory .= '/' . $folder->path;
    //         }
    //     }

    //     // Store the file in the private disk within the specified directory
    //     $path = $file->store($directory, 'local'); // Specify 'local' to use the private disk

    //     // Store file information in the database
    //     File::create([
    //         'name' => $file->getClientOriginalName(),
    //         'path' => $path,
    //         'user_id' => Auth::id(),
    //         'folder_id' => $folder->parent_folder_id,
    //         'subfolder_id' => $request->subfolder_id,
    //     ]);

    //     $files = File::find($folder->parent_folder_id);

    //     // print_r($files);
    //     // exit;

    //      // Return view with folder and its immediate subfolders
    //      return view('folders.subfolders', compact('subfolder', 'folder', 'files'));
    // }
    //working
    public function uploadFile(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,PNG,pdf,docx,doc,xlsx,xls,txt|max:2048',
            'subfolder_id' => 'nullable|exists:sub_folder,id',
            'user_id' => 'nullable|exists:users,id', // For admin to specify target user
        ]);


        $user = Auth::user();

        // Check if the user is an admin
        $isAdmin = $user->role == 'admin';
        if ($isAdmin) {
            $targetUserId = $request->user_id; // Admin can specify a target user
            if (!$targetUserId) {
                return response()->json(['error' => 'Target user ID is required for admin uploads.'], 400);
            }
            // Fetch the target user
            $targetUser = User::find($targetUserId);
            if (!$targetUser) {
                return response()->json(['error' => 'Target user not found.'], 404);
            }

            // Set subfolder ID from target user’s subfolder (or specify custom behavior)
            $subfolderId = $request->subfolder_id ?? $targetUser->default_subfolder_id; // Default to a specific subfolder of the target user
            $package = Package::find($targetUser->package_id);
            $user_ids = $targetUser;
        } else {
            // Regular user uploads to their own subfolder
            $subfolderId = $request->subfolder_id ?? $user->default_subfolder_id; // Assuming each user has a default subfolder
            $package = Package::find($user->package_id);
            $user_ids = $user;
        }

        $isSubfolder = 1;
        $subfolderIdmain = $request->subfolder_id;

        $file = $request->file('file');

        // Get the current user
        // $user = Auth::user();

        // Get all user packages
        $packages = UserPackage::where('user_id', $user->id)
        ->when(function ($query) {
            // Apply expiry date check only if package_type is not 'one_time'
            return $query->where('package_type', '!=', 'one_time');
        }, function ($query) {
            return $query->where('expiry_date', '>=', now());
        })
        ->orWhere(function ($query) {
            // If package_type is 'one_time', skip expiry check
            return $query->where('package_type', 'one_time');
        })
        ->with('package')
        ->get();

        if ($packages->isEmpty()) {
            return response()->json(['error' => 'Invalid package, please upgrade your package.'], 400);
        }

        // Calculate total allowed quota from all user packages by summing package quotas
        $allowedQuota = $packages->sum(fn($userPackage) => $userPackage->package->quota ?? 0);
        $file = $request->file('file');

        // Get the file size in kilobytes (KB) and round it to two decimal places
        $fileSizeInBytes = $file->getSize();
        $fileSizeInKB = round($fileSizeInBytes / 1024, 2); // Convert to KB

        // Check if the user has enough remaining quota to upload the file
        $remainingQuota = $allowedQuota - $user->quota_used;

        if ($remainingQuota < $fileSizeInKB) {
            // Retrieve all available packages for upgrade
            $packages = Package::all(); // Fetch all packages
            $quotaExceeded = checkQuota(); // Call the checkQuota method

            // Return the view with the error message and packages
            return view('user.quota-exceeded', compact('packages', 'quotaExceeded'));
        }

        // Initialize variables for file storage and subfolder details
        $directory = null;
        $folder = null;
        $subfolder = null;
        $nestedSubfolders = collect(); // Default to an empty collection
        $files = collect(); // Default to an empty collection

        // If a subfolder_id is provided, process the file in the subfolder
        if ($request->subfolder_id) {
            $subfolder = SubFolder::find($request->subfolder_id);

            // Check if the subfolder exists and is linked to the correct folder
            if ($subfolder) {
                $folder = Folder::find($subfolder->parent_folder_id);
                $directory = '/' . $folder->path . '/' . $subfolder->path; // Set directory path

                // Retrieve the nested subfolders for the subfolder
                $nestedSubfolders = $subfolder->children;
            }
        } else {
            // If no subfolder_id is provided, work with the root folder or other structure
            // You can set a default directory or handle as per your app's logic
        }

        // Store the file in the private storage disk with the calculated directory path
        $path = $file->store($directory, 'local'); // Store file in the private disk

        // Store file metadata in the database
        File::create([
            'name' => $file->getClientOriginalName(),
            'path' => $path,
            'user_id' => $user_ids->id,
            'folder_id' => $folder ? $folder->id : null,
            'subfolder_id' => $subfolder ? $subfolder->id : null,
        ]);
        $folderIdmain = $folder ? $folder->id : null;
        // Retrieve files and subfolder counts
        if ($subfolder) {
            $files = $subfolder->files; // Get files associated with this subfolder
            $subfolderCount = $subfolder->children->count(); // Get count of nested subfolders
        } else {
            $subfolderCount = 0; // No subfolder if not provided
        }

        // Update the user's quota_used with the size of the uploaded file (in KB)
        $user = $user_ids; // Get the current logged-in user
        $user->quota_used += $fileSizeInKB; // Add the file size in KB to the quota_used
        $user->save(); // Save the updated quota_used
        $quotaExceeded = checkQuota(); // Call the checkQuota method

        // Return the view with the appropriate data
        return view('folders.subfolders', compact('folder', 'subfolder', 'nestedSubfolders', 'files', 'subfolderCount', 'isSubfolder', 'subfolderIdmain', 'folderIdmain', 'quotaExceeded'));
    }


    // public function uploadFile(Request $request)
    //     {
    //         // Validate the incoming request
    //         $request->validate([
    //             'file' => 'required|file|mimes:jpg,jpeg,png,PNG,pdf,docx,doc,xlsx,xls,txt|max:2048',
    //             'subfolder_id' => 'nullable|exists:sub_folder,id',
    //             'user_id' => 'nullable|exists:users,id', // For admin to specify target user
    //         ]);

    //         // Get the current user
    //         $user = Auth::user();

    //         // Check if the user is an admin
    //         $isAdmin = $user->role == 'admin'; // Or use whatever method/column identifies admin users

    //         // If the user is an admin, allow them to upload to another user's subfolder
    //         if ($isAdmin) {
    //             $targetUserId = $request->user_id; // Admin can specify a target user
    //             if (!$targetUserId) {
    //                 return response()->json(['error' => 'Target user ID is required for admin uploads.'], 400);
    //             }

    //             // Fetch the target user
    //             $targetUser = User::find($targetUserId);
    //             if (!$targetUser) {
    //                 return response()->json(['error' => 'Target user not found.'], 404);
    //             }

    //             // Set subfolder ID from target user’s subfolder (or specify custom behavior)
    //             $subfolderId = $request->subfolder_id ?? $targetUser->default_subfolder_id; // Default to a specific subfolder of the target user
    //             $package = Package::find($targetUser->package_id);
    //         } else {
    //             // Regular user uploads to their own subfolder
    //             $subfolderId = $request->subfolder_id ?? $user->default_subfolder_id; // Assuming each user has a default subfolder
    //             $package = Package::find($user->package_id);
    //         }

    //         // Retrieve the subfolder
    //         $subfolder = SubFolder::find($subfolderId);
    //         if (!$subfolder) {
    //             return response()->json(['error' => 'Subfolder not found.'], 404);
    //         }

    //         // Retrieve the user's package and allowed quota

    //         if (!$package) {
    //             return response()->json(['error' => 'Invalid package, please upgrade your package.'], 400);
    //         }

    //         // Get the allowed quota from the user's package
    //         $allowedQuota = $package->quota;

    //         // Get the file and its size
    //         $file = $request->file('file');
    //         $fileSizeInBytes = $file->getSize();
    //         $fileSizeInKB = round($fileSizeInBytes / 1024, 2); // Convert to KB

    //         // Check if the user has enough remaining quota to upload the file

    //                             $remainingQuota = $allowedQuota - $user->quota_used;

    //                             if ($remainingQuota < $fileSizeInKB) {
    //                                 // Retrieve all available packages for upgrade
    //                                 $packages = Package::all(); // Fetch all packages
    //                                 $quotaExceeded = checkQuota(); // Call the checkQuota method

    //                                 // Return the view with the error message and packages
    //                                 return view('user.quota-exceeded', compact('packages','quotaExceeded'));
    //                             }

    //         // Store the file
    //         $filePath = $subfolder->path . '/' . $file->getClientOriginalName();
    //         $file->move(public_path($subfolder->path), $file->getClientOriginalName());

    //         // Optionally, update the quota used by the user
    //         $user->quota_used += $fileSizeInKB;
    //         $user->save();

    //         return response()->json(['success' => 'File uploaded successfully.']);
    //     }









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
