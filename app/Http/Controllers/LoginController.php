<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showloginForm()
    {
        $action = 'login';
        return view('auth.Auth', compact('action'));
    }

    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        Log::info('Login attempt', ['email' => $credentials['email']]);

        // Use first() to get a single user model, not a collection
        $user = Utilisateur::where('email', $credentials['email'])->first();

        if (!$user) {
            Log::warning('User not found', ['email' => $credentials['email']]);
            return back()->withErrors(['email' => __('auth.failed')])->withInput();
        }

        // WARNING: Comparing plain-text passwords is insecure if passwords are hashed
        // If passwords are hashed, use Hash::check($credentials['password'], $user->password)
        if ($request->input('password') == $user->password) {
            // Log the user in manually since we're not using Auth::attempt()
            Auth::login($user);
            $request->session()->regenerate();

            Log::info('Login successful', ['user_id' => $user->id, 'role' => $user->role]);

            if ($user->role === 'admin') {
                return redirect()->route('admin.Dashboard');
            }
            return redirect()->route('user.home')->with('success', __('Bienvenue, :name!', ['id' => $user->id]));
        }

        Log::warning('Password mismatch', ['email' => $credentials['email']]);
        return back()->withErrors(['email' => __('auth.failed')])->withInput();
    }

    public function logout(Request $request)
    {
        if (auth()->check()) {
            auth()->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('home');
        }
        return redirect()->route('home')->with('error', __('Aucun utilisateur connecté.'));
    }
}
