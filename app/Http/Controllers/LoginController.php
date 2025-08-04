<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login', [
            'title' => __('nav.login'),
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->role === 'admin') {
                return redirect()->intended('admin/dashboard');
            }
            return redirect()->intended('offers');
        }
        return redirect()->back()->withErrors(['email' => __('auth.failed')]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function showResetForm()
    {
        return view('auth.passwords.reset', [
            'title' => __('nav.reset_password'),
        ]);
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $token = Str::random(60);
            // Stocker le token (à implémenter dans une table password_resets)
            Mail::to('abdou2018.falih@gmail.com')->send(new EmailVerification($user, $token));
        }
        return redirect()->back()->with('status', __('messages.reset_link_sent'));
    }
}
