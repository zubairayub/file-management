<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Folder;
use App\Models\SubFolder;
use Illuminate\Support\Facades\Storage;

use App\Models\Package;

class AdminController extends Controller
{
    // Show the admin dashboard
    public function index()
    {   
        // Check if the logged-in user is an admin
        if (auth()->user()->role !== 'admin') {
            // Redirect the user if they are not an admin
            return redirect()->route('login')->with('error', 'You are not authorized to view this page.');
        }
         // Get all users along with their total packages, total folders, and total files
            // Get all users along with their total packages, total folders, and total files
            $users = User::withCount([
                'package',  // Count packages directly related to the user
                'folders',   // Count folders directly related to the user
            ])
            ->with(['folders' => function ($query) {
                $query->withCount('files');  // Count files in the folders
                $query->withCount('subFolders');  // Count subfolders in the folders
            }])
            ->get();
          
                return view('dashboard', compact('users'));
    }

    public function edit(User $user)
    {
        // Check if the logged-in user is an admin
        if (auth()->user()->role !== 'admin') {
            // Redirect the user if they are not an admin
            return redirect()->route('home')->with('error', 'You are not authorized to edit this user.');
        }

        $user = User::with('userPackages.package')->findOrFail($user->id); 

         // Get all available packages (e.g., from the 'packages' table)
        $allPackages = Package::all();

        // Pass both the user and all available packages to the view
        return view('user.edit', compact('user', 'allPackages'));
    }


    public function update(Request $request, User $user)
    {
        // Check if the logged-in user is an admin
        if (auth()->user()->role !== 'admin') {
            // Redirect the user if they are not an admin
            return redirect()->route('home')->with('error', 'You are not authorized to update this user.');
        }
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,customer', // Assuming role can be admin or user
            'status' => 'required|in:active,inactive', // Validate status
            'packages' => 'array', // Validate packages as an array
            'packages.*' => 'exists:packages,id', // Validate if each package exists in the packages table
        ]);
    
        // Update the user with validated data
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'status' => $request->input('status'), // Update status field
        ]);
    
            // Detach old user packages and attach new ones
        $user->userPackages()->delete(); // This deletes all existing packages for this user
        foreach ($request->input('packages', []) as $packageId) {
            $user->userPackages()->create([
                'package_id' => $packageId, // Assuming 'package_id' is the foreign key
                'user_id' => $user->id,
                'package_type' => 'monthly', // Example: 'monthly', you may want to adjust this
                'expiry_date' => now()->addMonth(), // Example expiry date, adjust accordingly
            ]);
        }
        
    
        // Redirect back with success message
        return redirect()->route('admin.dashboard')->with('success', 'User updated successfully.');
    }
    
    

    public function destroy($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Delete the user
        $user->delete();

        // Redirect to the user list with a success message
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }

    public function show($id)
    {
        // Fetch the user with related data
        $user = User::with(['userPackages', 'orders.package'])->findOrFail($id);
        //dd($user);
        return view('user.details', compact('user'));
    }

    public function toggleStatus($userId)
    {
        $user = User::find($userId);

        if ($user) {
            // Toggle the status
            $user->status = ($user->status === 'active') ? 'inactive' : 'active';
            $user->save();

            // Return response
            return response()->json(['status' => $user->status]);
        }

        return response()->json(['error' => 'User not found'], 404);
    }


    public function adminShowUserFolders($userId = null, $folderId = null, $subfolderId = null)
    {   
       
            // If the user is an admin
            if (auth()->user()->role !== 'admin') {
                abort(403, 'Unauthorized access');
            }
        
            // If no userId is provided, display the list of all users
            if ($userId === null) {
                // Get all users
                $users = User::all();
        
                // Return a view to list all users
                return view('admin.users', compact('users'));
            }
        
            // If a user is selected, fetch that user's folders
            $user = User::findOrFail($userId);
        
            // Fetch all folders belonging to the selected user
            $folders = $user->folders;  // Assuming a `folders()` relationship on the User model
        
            // If no folderId is provided, display the list of folders for the selected user
            if ($folderId === null) {
                return view('admin.user_folders', compact('user', 'folders'));
            }
        
            // If folderId is provided, fetch the folder
            $folder = Folder::findOrFail($folderId);
        
            // Initialize variables to handle subfolders and files
            $subfolders = [];
            $files = collect();
        
            // If subfolderId is provided, fetch the subfolder
            if ($subfolderId) {
                $subfolder = SubFolder::findOrFail($subfolderId);
        
                // Ensure the subfolder belongs to the provided folder
                if ($subfolder->parent_folder_id != $folderId) {
                    abort(404, 'Subfolder not found in this folder.');
                }
        
                // Get files and sub-subfolders for the selected subfolder
                $files = $subfolder->files;
                $subfolders = $subfolder->children;  // Assuming a `children()` relationship
        
                return view('admin.user_subfolder_files', compact('user', 'folder', 'subfolder', 'subfolders', 'files'));
            }
        
            // If no subfolderId is provided, display the subfolders of the selected folder
            $subfolders = SubFolder::where('parent_folder_id', $folderId)->whereNull('parent_id')->get();
        
            return view('admin.user_folder_subfolders', compact('user', 'folder', 'subfolders'));
        
        
    }

    public function adminCreateSubFolderForUser(Request $request, $userId, $parentFolderId)
    {   
       
        // Check if the authenticated user is an admin
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Unauthorized access');
        }

        // Validate the subfolder name and the subfolder flag
        $request->validate([
            'name' => 'required|string|max:255',
            
        ]);

        // Find the user for whom the admin is creating the subfolder
        $user = User::findOrFail($userId);

        // Check if the user has access to the parent folder (optional based on your logic)
        // If the user does not have the folder or subfolder, you can abort with a message
      
       
        // Check if it's a subfolder or a main folder
        if ($request->is_subfolder) {
           if($request->by_id == 1){
                // If it's a subfolder, find the parent subfolder
                $parentFolder = SubFolder::where('id', $parentFolderId)
                ->where('user_id', $userId)
                ->first(); // Get the first matching record
                $parentFolderId =  $parentFolder->parent_folder_id;
           }else{
              // If it's a subfolder, find the parent subfolder
              $parentFolder = SubFolder::where('parent_folder_id', $parentFolderId)
              ->where('user_id', $userId)
              ->first(); // Get the first matching record
             
           }
          
                                    
            if ($parentFolder) {
                $parent = $parentFolder->id; // Get the main folder ID
            } else {
                // Handle case when no parent folder is found
            }
         
        } else {
           
            // If it's a main folder, just use the provided folder ID
           
            $parentFolder = Folder::findOrFail($parentFolderId);
            $parent = null;
            
        }
       
    
        // Construct the full path for the new subfolder
        if($request->by_id == 1){
          
            $fullPath = getFullPath($parent,$userId,true) . '/' . $request->name;
           
        }
        else{
            $fullPath = getFullPath($parentFolder,$userId) . '/' . $request->name;
        }
        
       
        // Create the directory in storage if it doesn't already exist
        Storage::makeDirectory($fullPath);
      
        // Create a new subfolder in the database
        $subFolder = SubFolder::create([
            'name' => $request->name,
            'user_id' => $user->id,
            'parent_folder_id' => $parentFolderId,
            'parent_id' => $parent,  // This could be null or the folder's ID based on your structure
            'path' => $fullPath,
        ]);

        // Return the admin to the list of user's folders with a success message
        return redirect()->route('admin.showUserFolders', ['userId' => $user->id, 'folderId' => $parentFolderId,'subfolderId'=> $parent])
                        ->with('success', 'Subfolder created successfully for the user!');
    }

    


}

