<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Folder;
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', Rules\Password::defaults()],
            'role' => ['required', 'in:customer,admin,staff'], // Role validation
            
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role, // Save the role
        ]);

                // Check if the user role is 'customer'
            if ($user->role === 'customer') {
                // Define the folder path using the user ID and name
                $folderPath = 'files/' . $user->id . '_' . str_replace(' ', '_', $user->name);

                // Create the main user folder
                Storage::makeDirectory($folderPath);

                // Define default folders to create in the storage and database
                $defaultFolders = ['Bookkeeping', 'Taxes', 'Payroll', 'ITIN', 'EIN'];
                
                // Loop to create each default folder in storage and add a record in the database
                foreach ($defaultFolders as $folderName) {
                    $subFolderPath = "$folderPath/$folderName";
                    Storage::makeDirectory($subFolderPath);

                    // Save the folder information in the database
                    Folder::create([
                        'name' => $folderName,
                        'user_id' => $user->id,
                        'path' => $subFolderPath,  // Optionally store the folder path
                    ]);
                }
            }

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
