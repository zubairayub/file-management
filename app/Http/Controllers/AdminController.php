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


    public function update(Request $request)
{
    // Check if the status exists in the request
    if (!$request->has('status')) {
        
        return response()->json(['error' => 'Status is missing'], 400);
    }

    // Debugging: Output the value of status
    echo $request->input('status');
    exit;

    // Update the user status
    $user->status = $request->input('status');
    $user->save();  // Save the updated status to the database

    // Return a JSON response indicating success
    return response()->json(['success' => true]);
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

