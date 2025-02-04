<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Folder;
use Carbon\Carbon;
use App\Models\SubFolder;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', Rules\Password::defaults()],
                'role' => ['required', 'in:customer,admin,staff'], // Role validation
                'package_id' => ['nullable', 'integer', 'exists:packages,id'], // Validate package_id
                'prefix' => ['nullable', 'string', 'max:10'], // Validate prefix (optional)
                'last_name' => ['required', 'string', 'max:255'], // Last name is required
                'phone_number' => ['nullable', 'string', 'max:15', 'unique:' . User::class], // Validate phone_number (optional, unique)
            ]);
            
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role, // Save the role
                'package_id' => $request->package_id ?? 1, // Default to 1 if not provided
                'prefix' => $request->prefix, // Save the prefix
                'last_name' => $request->last_name, // Save the last name
                'phone_number' => $request->phone_number, // Save the phone_number
            ]);

                // Check if the user role is 'customer'
            if ($user->role === 'customer') {
                // Define the folder path using the user ID and name
                $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name);

                // Create the main user folder
                Storage::makeDirectory($folderPath);

                // Define default folders to create in the storage and database
                $defaultFolders = ['Bookkeeping', 'Taxes', 'Payroll', 'Business Formation'];
                // Get the current year
                $currentYear = Carbon::now()->year;
                // Loop to create each default folder in storage and add a record in the database
                // foreach ($defaultFolders as $folderName) {
                //     $subFolderPath = "$folderPath/$folderName";
                //     Storage::makeDirectory($subFolderPath);

                //     // Save the folder information in the database
                //     Folder::create([
                //         'name' => $folderName,
                //         'user_id' => $user->id,
                //         'path' => $subFolderPath,  // Optionally store the folder path
                //     ]);
                // }
                // Loop to create each default folder in storage and add a record in the database
                foreach ($defaultFolders as $folderName) {
                    $subFolderPath = "$folderPath/$folderName";
                    Storage::makeDirectory($subFolderPath);

                    // Save the folder information in the database
                    $folder = Folder::create([
                        'name' => $folderName,
                        'user_id' => $user->id,
                        'path' => $subFolderPath, // Optionally store the folder path
                    ]);

                    // Create subfolders for the last 3 years inside each main folder
                    for ($year = $currentYear; $year > $currentYear - 3; $year--) {
                        $yearSubFolderPath = "$subFolderPath/$year";
                        Storage::makeDirectory($yearSubFolderPath);

                        // Save each subfolder in the database
                        SubFolder::create([
                            'name' => (string)$year,
                            'user_id' => $user->id,
                            'parent_folder_id' => $folder->id, // Link to the main folder
                            'path' => $yearSubFolderPath,      // Store subfolder path
                        ]);
                    }
                }
            }

        event(new Registered($user));
        // Send welcome email
        Mail::to($user->email)->send(new WelcomeMail($user));
        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
