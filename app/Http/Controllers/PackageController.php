<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    // Method to show a list of packages
    public function index()
    {
        $packages = Package::all(); // Retrieve all packages
        $quotaExceeded = checkQuota(); // Call the checkQuota method
        return view('admin.packages.index', compact('packages','quotaExceeded')); // Return to a view (adjust accordingly)
    }

    public function quotaExceeded()
    {
        // Fetch the packages (assuming you have a Package model)
        $packages = Package::all();  // You can adjust this query based on your needs
        $quotaExceeded = checkQuota(); // Call the checkQuota method

        // Return the view and pass the packages to it
        return view('user.quota-exceeded', compact('packages','quotaExceeded'));
    }

    // Method to show the form to create a new package
    public function create()
    {
        return view('admin.packages.create');
    }

    // Method to store a newly created package
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'quota' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        Package::create($validated); // Store the new package
        return redirect()->route('packages.index'); // Redirect to the packages list
    }

    // Method to show a single package
    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('packages.show', compact('package'));
    }

    // Method to show the form to edit an existing package
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit', compact('package'));
    }

    // Method to update an existing package
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'quota' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $package = Package::findOrFail($id);
        $package->update($validated); // Update the package
        return redirect()->route('packages.index'); // Redirect to the packages list
    }

    // Method to delete a package
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete(); // Delete the package
        return redirect()->route('packages.index'); // Redirect to the packages list
    }
}
