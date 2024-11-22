<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function edit($id)
    {
        $user = User::findOrFail($id); // Get the user by ID
        return view('users.edit', compact('user')); // Pass the user to the view
    }

    public function update(Request $request, $id)
    {
        // Validate incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'phone_number' => 'nullable|numeric',
            // Add other validation rules for your fields
        ]);

        // Find the user to update
        $user = User::findOrFail($id);

        // Update the user attributes
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone_number = $validated['phone_number'] ?? $user->phone_number;
        // Update other fields if necessary

        // Save the user
        $user->save();

        // Redirect to the user list with a success message
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
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



}

