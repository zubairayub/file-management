<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SubFolder;
use App\Models\Folder;
use App\Models\File;
use App\Models\User;

class UserController extends Controller
{
            public function index()
            {
                  // Fetch the user's folders with counts for immediate subfolders and files (no recursion for nested subfolders)
                    $folders = auth()->user()->folders()
                    ->withCount(['subFolders', 'files' => function($query) {
                        // Count files that belong to the folder, matching the folder_id
                        $query->whereNull('subfolder_id'); // Only count files with no subfolder (i.e., not inside any subfolder)
                    }]) // Count immediate files for each folder
                    ->with(['subFolders' => function ($query) {
                        // Get counts for immediate subfolders and files under each subfolder
                        $query->withCount(['subFolders', 'files' => function($query) {
                            // Count files related to the subfolder
                            $query->whereNull('subfolder_id'); // Only count files without any nested subfolder
                        }])  // Count immediate files for the subfolder
                        ->whereNull('parent_id'); // Ensure we're only getting immediate subfolders with no parent subfolder
                    }])
                    ->get();

                    // Assuming you fetch recent files from the database
                    $files = File::orderBy('created_at', 'desc')
                    ->where('user_id',auth()->user()->id)
                    ->limit(5)->get(); 
                    // Fetch total storage from the related package
                    $package = auth()->user()->package; // Assuming there is a relationship set up in the User model
                     
                    $totalStorage = $package ? $package->quota : 0; // Replace `storage_limit` with the appropriate column name in the packages table

                    // Fetch the storage used from the `quota_used` column
                    $quotaUsed = auth()->user()->quota_used; // Assuming `quota_used` exists in the users table

                    // Pass the required data to the view
                    return view('user.dashboard', compact('folders', 'files', 'totalStorage', 'quotaUsed'));
            }



            
}
