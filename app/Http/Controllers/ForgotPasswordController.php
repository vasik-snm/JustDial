<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ResetPasswordCodeMail;  // Create this Mail class
use App\Models\User;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    // Show forgot password form
    public function showForgotPasswordForm()
    {
        return view('Admin.forgot-password');
    }

    // Handle password reset email sending
    public function sendResetLink(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
        ]);
        // dd($request);

        // Generate a 6-digit random code
        $code = strtoupper(substr(str_shuffle('0123456789'), 0, 6));
        // dd($code);

        // Store the code and timestamp in the session
        session(['reset_code' => $code, 'reset_email' => $request->email, 'reset_time' => Carbon::now()]);

        // Send the code to the user via email (create a Mail class for this)
        Mail::to($request->email)->send(new ResetPasswordCodeMail($code));

        return redirect()->route('password.verify.form')->with('success', 'We have emailed you a 6-digit code for resetting your password.');
    }

    // Show form to verify code
    public function showCodeVerificationForm()
    {
        return view('Admin.verify-code');
    }

    // Verify code and allow user to set a new password
    public function verifyCode(Request $request)
    {
        // Validate code input
        $request->validate([
            'code' => 'required|digits:6',
        ]);

        // Check if the entered code matches the session code
        if ($request->code === session('reset_code')) {
            // Check if the code has expired (10 minutes validity)
            $codeTimestamp = session('reset_time');
            if (Carbon::now()->diffInMinutes($codeTimestamp) > 10) {
                // If the code is older than 10 minutes, expire the code
                session()->forget(['reset_code', 'reset_email', 'reset_time']);
                return back()->withErrors(['code' => 'The reset code has expired. Please request a new one.']);
            }

            // Proceed to password reset form if code is valid
            return redirect()->route('password.reset');
        }

        return back()->withErrors(['code' => 'Invalid code. Please try again.']);
    }


    public function showResetPasswordForm()
    {
        return view('Admin.reset-password');  // Make sure you create the 'reset-password' view
    }

    // Update password
    // public function updatePassword(Request $request)
    // {
    //     // Validate password and password confirmation
    //     $request->validate([
    //         'password' => 'required|confirmed',  // Ensure the password is confirmed and has a minimum length
    //     ]);

    //     // Check if the reset_email is stored in session
    //     $email = session('reset_email');
    //     if (!$email) {
    //         // If the email doesn't exist in session, redirect back to the password request page
    //         return redirect()->route('password.request')->withErrors(['email' => 'Session expired or invalid. Please try again.']);
    //     }

    //     // Retrieve the user using the email from session
    //     $user = User::where('email', $email)->first();

    //     if (!$user) {
    //         // If the user does not exist, return an error message
    //         return redirect()->route('password.request')->withErrors(['email' => 'No user found with this email address.']);
    //     }

    //     // Update the user's password
    //     $user->update([
    //         'password' => bcrypt($request->password),  // Encrypt new password
    //     ]);

    //     // Clear the session
    //     session()->forget(['reset_code', 'reset_email']);

    //     // Redirect to the login page with a success message
    //     return redirect()->route('login')->with('success', 'Your password has been reset successfully!');
    // }

    public function updatePassword(Request $request)
    {
        // Validate password and password confirmation
        $request->validate([
            'password' => 'required|confirmed',  // Ensure password and confirmation match, with a minimum length of 8
        ]);

        // Check if the reset_email is stored in session
        $email = session('reset_email');
        if (!$email) {
            // If email is not found in session, redirect back
            return redirect()->route('password.request')->withErrors(['email' => 'Session expired or invalid. Please try again.']);
        }

        // Retrieve user using email stored in session
        $user = User::where('email', $email)->first();

        if (!$user) {
            // If no user is found, show an error
            return redirect()->route('password.request')->withErrors(['email' => 'No user found with this email address.']);
        }

        // Update the user's password
        $user->update([
            'password' => bcrypt($request->password),  // Encrypt the new password
        ]);

        // Clear the session data
        session()->forget(['reset_code', 'reset_email']);

        // Redirect to login page with success message
        return redirect()->route('login')->with('success', 'Your password has been reset successfully!');
    }
}
