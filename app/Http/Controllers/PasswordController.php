<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    // Show the password update form
    public function showUpdateForm()
    {
        return view('user.update-password');
    }

    // Handle password update
    public function update(Request $request)
    {
        // Validate the input
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'], // Includes confirmation
        ]);

        // Check if the current password is correct
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['The current password is incorrect.'],
            ]);
        }

        // Update the password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('password.update.form')->with('success', 'Password updated successfully!');
    }

      // Show the forgot password form
      public function showForgotPasswordForm()
      { 
        echo 'hi';
        exit;
          return view('user.forgot-password');
      }
  
      // Handle the reset link email
      public function sendResetLink(Request $request)
      {
          $request->validate(['email' => 'required|email']);
  
          $status = Password::sendResetLink(
              $request->only('email')
          );
  
          return $status === Password::RESET_LINK_SENT
              ? back()->with(['status' => __($status)])
              : back()->withErrors(['email' => __($status)]);
      }
}
