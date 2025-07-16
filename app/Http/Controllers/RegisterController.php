<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountConfirmation;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.auth', ['action' => 'register']);
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:utilisateurs,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'role' => ['required', 'in:cooperative,commerçant'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $user = Utilisateur::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'notification_type' => $data['notification_type'],
        ]);

        Mail::to($user->email)->send(new AccountConfirmation($user));
        Auth::login($user);
        return redirect()->route('auth.confirmation');
    }
}
