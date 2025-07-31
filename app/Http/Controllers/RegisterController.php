<?php

namespace App\Http\Controllers;

use App\Mail\ProfileMail;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function ShowRegisterForm()
    {
        $action = 'register';
        return view('auth.Auth', compact('action'));
    }

    public function Register(Request $request)
    {
        $validation = $request->validate([
            'name'  => ['required'],
            'email' => ['required', 'email'],
        ]);
        if ($request->input('password') == $request->input('password_confirmation')) {
            $user = new Utilisateur();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->created_at = date('Y-m-d H:i:s');
            $user->save();
            // Send confirmation email
            Mail::to($user->email)->send(new ProfileMail($user, 'confirmation'));
            // Show validation view and pass the user object
            return view('auth.Validate', ['user' => $user])
                ->with('status', __('Please check your inbox to verify your email address.'));
        }
        // Handle password mismatch
        return back()->withErrors(['password' => __('Passwords do not match.')]);
    }

    public function verifyEmail($id)
    {
        $user = Utilisateur::findOrFail($id);
        $user->email_verified_at = now();
        $user->save();
        Mail::to($user->email)->send(new ProfileMail($user, 'validation'));
        return redirect()->route('login')->with('status', __('Your account has been successfully validated. You can now log in.'));
    }
}
