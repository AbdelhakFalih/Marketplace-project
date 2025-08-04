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
        $lastUser = Utilisateur::orderBy('id', 'desc')->first();
        $lastUserId = $lastUser->id;
        $validation = $request->validate([
            'name'  => ['required'],
            'email' => ['required', 'email'],
        ]);
        if ($request->input('password') == $request->input('password_confirmation')) {
            $user = new Utilisateur();
            $user->id = $lastUserId + 1;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->created_at = date('Y-m-d H:i:s');
            $user->save();
            // Send confirmation email
            Mail::to('abdou2018.falih@gmail.com')->send(new ProfileMail($user, 'confirmation'));
            // Show validation view and pass the user object
            return
                back()->with('status', __(' Please check your inbox to verify your email address.'));
        }
        // Handle password mismatch
        return back()->withErrors(['password' => __('Passwords do not match.')]);
    }

    public function showValidate(){
        return view('auth.Validate');
    }
    public function verifyEmail(Request $request)
    {
        $user = Utilisateur::findOrFail($request->input('id'));
        $user->email_verified_at = now();
        $user->save();
        Mail::to('abdou2018.falih@gmail.com')->send(new ProfileMail($user, 'validation'));
        return redirect()->route('login')->with('status', __('Your account has been successfully validated. You can now log in.'));
    }
}
