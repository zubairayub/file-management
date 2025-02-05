<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\SubFolder;
use App\Models\Folder;
use App\Models\UserPackage;
use App\Models\File;
use Illuminate\Support\Facades\Log;



class PDFController extends Controller
{
    // public function uploadPDF(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'pdf' => 'required|file|mimes:pdf|max:5120', // Max 5MB
    //     ]);
    //     $user = Auth::user();
    //     $currentYear = Carbon::now()->year;
    //     $currentDate = Carbon::now()->format('dmy'); // Get current date in "dmy" format
    //     $defaultFolder = 'Business Formation';

    //     $package = Package::find($user->package_id); // Assuming user has a 'package_id' field
    //     if (!$package) {
    //         return response()->json(['error' => 'Invalid package, please upgrade your package.'], 400);
    //     }

    //     // Get the allowed quota from the user's package
    //     $allowedQuota = $package->quota; // Assuming 'quota' is stored in the Package model
    //     $file = $request->file('pdf');

    //     // Get the file size in kilobytes (KB) and round it to two decimal places
    //     $fileSizeInBytes = $file->getSize();
    //     $fileSizeInKB = round($fileSizeInBytes / 1024, 2); // Convert to KB

    //     // Check if the user has enough remaining quota to upload the file
    //     $remainingQuota = $allowedQuota - $user->quota_used;

    //     if ($remainingQuota < $fileSizeInKB) {
    //         // Retrieve all available packages for upgrade
    //         $packages = Package::all(); // Fetch all packages
    //         $quotaExceeded = checkQuota(); // Call the checkQuota method

    //         // Return the view with the error message and packages
    //         return view('user.quota-exceeded', compact('packages', 'quotaExceeded'));
    //     }



    //     // Create the folder in the file system (storage/app/public by default)


    //     // Define the folder path
    //     $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $defaultFolder . '/' . $currentYear;

    //     // Check if the folder exists in the 'sub_folder' table
    //     $subFolder = SubFolder::where('path', $folderPath)
    //         ->where('user_id', $user->id)
    //         ->first();


    //     // Check if the folder exists in the 'folder' table for the given user
    //     $folder = Folder::where('user_id', $user->id)
    //         ->where('name', $defaultFolder)
    //         ->first(); // Retrieve the first matching record

    //     if ($subFolder) {
    //         // Folder exists, retrieve the data
    //         // You can now access the $subFolder object to get the data, e.g., $subFolder->data
    //         // For example, you can use: $subFolder->name, $subFolder->created_at, etc.
    //         // You can return or use the data as needed
    //         $subFolder;

    //     } else {

    //         // Folder doesn't exist, so create it in the storage
    //         Storage::makeDirectory($folderPath);

    //         // Save each subfolder in the database
    //         $subFolder = SubFolder::create([
    //             'name' => (string) $currentYear,
    //             'user_id' => $user->id,
    //             'parent_folder_id' => $folder->id, // Link to the main folder
    //             'path' => $folderPath,      // Store subfolder path
    //         ]);

    //         // Return or use the created $subFolder object
    //         $subFolder;
    //     }

    //     // Make sure the folder exists in the storage path
    //     Storage::makeDirectory($folderPath);

    //     // Get the original file name
    //     $originalFileName = $request->file('pdf')->getClientOriginalName();

    //     // Generate a new file name by appending the current "dmy" date format
    //     $newFileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '_' . $currentDate . '.' . $request->file('pdf')->getClientOriginalExtension();

    //     // Store the file on the server with the new name
    //     $filePath = $request->file('pdf')->storeAs($folderPath, $newFileName, 'local');

    //     if ($filePath) {

    //         File::create([
    //             'name' => $newFileName,
    //             'path' => $filePath,
    //             'user_id' => $user->id,
    //             'folder_id' => $folder ? $folder->id : null,
    //             'subfolder_id' => $subFolder ? $subFolder->id : null,
    //         ]);

    //         $user->quota_used += $fileSizeInKB; // Add the file size in KB to the quota_used
    //         $user->save(); // Save the updated quota_used
    //        // $quotaExceeded = checkQuota(); // Call the checkQuota method

    //     }


    //     return response()->json([
    //         'message' => 'PDF uploaded successfully!',
    //         'file_path' => Storage::url($filePath),
    //     ]);
    // }

    public function uploadPDF(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'pdf' => 'required|file|mimes:pdf|max:5120', // Max 5MB
            ]);

            $user = Auth::user();
            if (!$user) {
                return response()->json(['error' => 'User not authenticated.'], 401);
            }

            $currentYear = Carbon::now()->year;
            $currentDate = Carbon::now()->format('dmy');
            $defaultFolder = 'Business Formation';

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

            $file = $request->file('pdf');
            $fileSizeInKB = round($file->getSize() / 1024, 2);

            // Check user quota
            $remainingQuota = $allowedQuota - $user->quota_used;
            if ($remainingQuota < $fileSizeInKB) {
                return response()->json([
                    'error' => 'Storage limit exceeded. Upgrade your package.',
                ], 400);
            }

            $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name) . '/' . $defaultFolder . '/' . $currentYear;

            // Ensure the folder exists
            if (!Storage::exists($folderPath)) {
                Storage::makeDirectory($folderPath);
            }

            // Find or create folder/subfolder
            $folder = Folder::firstOrCreate(
                ['user_id' => $user->id, 'name' => $defaultFolder]
            );

            $subFolder = SubFolder::firstOrCreate(
                ['path' => $folderPath, 'user_id' => $user->id],
                ['name' => (string) $currentYear, 'parent_folder_id' => $folder->id]
            );

            // Rename file with date
            $originalFileName = $file->getClientOriginalName();
            $newFileName = pathinfo($originalFileName, PATHINFO_FILENAME) . '_' . $currentDate . '.' . $file->getClientOriginalExtension();

            // Store the file
            $filePath = $file->storeAs($folderPath, $newFileName, 'local');
            if (!$filePath) {
                return response()->json(['error' => 'File storage failed.'], 500);
            }

            // Save file details in database
            File::create([
                'name' => $newFileName,
                'path' => $filePath,
                'user_id' => $user->id,
                'folder_id' => $folder->id,
                'subfolder_id' => $subFolder->id,
            ]);

            // Update user quota
            $user->quota_used += $fileSizeInKB;
            $user->save();

            return response()->json([
                'message' => 'PDF uploaded successfully!',
                'file_path' => Storage::url($filePath),
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        } catch (\Exception $e) {
            Log::error('PDF Upload Error: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while uploading the PDF. Please try again.'], 500);
        }
    }




}
