<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use App\Mail\PhoneVerificationNotification;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register', [
            'title' => __('nav.register'),
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'cooperative', // Valeur par défaut
            'password' => Hash::make($request->password),
            'email_verified_at' => null, // Non vérifié par défaut
        ]);
        $token = Str::random(60);
        // Stocker le token (à implémenter dans une table password_resets ou verification_tokens)
        Mail::to('abdou2018.falih@gmail.com')->send(new EmailVerification($user, $token));

        // Deuxième email après validation (simulé ici, à activer après vérification)
        // Mail::to('abdou2018.falih@gmail.com')->send(new PhoneVerificationNotification($user));

        auth()->login($user);
        return redirect()->route('home')->with('status', __('messages.registration_pending'));
    }

    public function verifyEmail($token)
    {
        $user = User::where('email_verification_token', $token)->first();
        if ($user) {
            $user->update(['email_verified_at' => now(), 'email_verification_token' => null]);
            Mail::to('abdou2018.falih@gmail.com')->send(new PhoneVerificationNotification($user));
            return redirect()->route('home')->with('success', __('messages.email_verified'));
        }
        return redirect()->route('login')->withErrors(['email' => __('auth.verification_failed')]);
    }
}
