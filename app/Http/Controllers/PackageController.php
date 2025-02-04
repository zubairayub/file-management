<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;



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


public function store(Request $request)
{
    try {
        // Validate request data
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'quota' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'services' => 'nullable|array',
            'services.*' => 'string|max:255',
            'features' => 'required|string',
            'desc' => 'nullable|string|max:500',
            'validity' => 'required|in:one-time,monthly',
        ]);

        // Process services and features
        $validated['services'] = $request->input('services', []); // Default to empty array if null
        $validated['features'] = explode("\n", trim($validated['features'])); // Split features by new line

        // Create package
        Package::create([
            'package_name' => $validated['package_name'],
            'quota' => $validated['quota'],
            'price' => $validated['price'],
            'services' => json_encode($validated['services']), // Store services as JSON
            'features' => json_encode($validated['features']), // Store features as JSON
            'desc' => $validated['desc'] ?? null,
            'validity' => $validated['validity'],
        ]);

        // Redirect with success message
        return redirect()->route('packages.index')
            ->with('success', 'Package created successfully!');
    } catch (ValidationException $e) {
        // Redirect back with validation errors and old input
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // Log the error
        \Log::error('Error creating package: ' . $e->getMessage());

        // Redirect back with error message
        return back()->withErrors(['error' => 'Failed to create package. Please try again.'])
                     ->withInput(); // Retain input data
    }
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

    public function update(Request $request, $id)
    {
        // Define the validation rules
        $validated = $request->validate([
            'package_name' => 'required|string|max:255',
            'quota' => 'required|numeric|min:1', // Ensure quota is numeric and at least 1
            'price' => 'required|numeric|min:0', // Ensure price is numeric and greater than zero
            'services' => 'nullable|array', // Validate services as an optional array
            'services.*' => 'string|distinct', // Ensure services are unique and strings
            'features' => 'required|string', // Ensure features are required and a string
            'desc' => 'nullable|string|max:1000', // Description is optional with a max length
            'validity' => 'required|in:one-time,monthly', // Validity should be either one-time or monthly
        ]);
        // Process services and features
        $validated['services'] = $request->input('services', []); // Default to empty array if null
        $validated['features'] = explode("\n", trim($validated['features'])); // Split features by new line
        // Begin the update process
        try {
            $package = Package::findOrFail($id); // Find the package or fail with 404
    
            // Update the package with validated data
            $package->update([
                'package_name' => $validated['package_name'],
                'quota' => $validated['quota'],
                'price' => $validated['price'],
                'services' => json_encode($validated['services']), // Store services as JSON
                'features' => json_encode($validated['features']), // Store features as JSON
                'desc' => $validated['desc'],
                'validity' => $validated['validity'],
            ]);
    
            // Optionally, log the update for security audit
            // Log::info('Package updated', ['package_id' => $package->id, 'user_id' => auth()->id()]);
    
            return redirect()->route('packages.index')->with('success', 'Package updated successfully!');
        } catch (ValidationException $e) {
            // Handle validation error and return with errors
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle any unexpected error and log it
            Log::error('Package update failed', ['error' => $e->getMessage()]);
            return back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    // Method to delete a package
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete(); // Delete the package
        return redirect()->route('packages.index'); // Redirect to the packages list
    }
}
