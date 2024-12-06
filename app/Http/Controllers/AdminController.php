<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;

class AdminController extends Controller
{
    // Show the admin dashboard
    public function index()
    {   
        // Check if the logged-in user is an admin
        if (auth()->user()->role !== 'admin') {
            // Redirect the user if they are not an admin
            return redirect()->route('home')->with('error', 'You are not authorized to view this page.');
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


}

