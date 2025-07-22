<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showloginForm(){
        $action = 'login';
        return view('auth.Auth',compact('action'));
    }

    public function Login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $pass_bdd = Utilisateur::where('email', $credentials['email'])->value('password');
        $pass_ent = $request->input('password');
        if ($pass_ent == $pass_bdd) {
            $role = Utilisateur::where('email', $credentials['email'])->value('role');
            if ($role == 'admin') {
                $users = Utilisateur::all();
                return view('admin.dashboard');
            }
            $user = Utilisateur::find( Utilisateur::where('email', $credentials['email'])->value('id'));
            return view('User_Space.Dashboard_User',compact('user'));
        }

        return back()->withErrors(['email' => __('auth.failed')]);
    }

    public function logout(Request $request)
    {
        // Vérification manuelle de l'utilisateur connecté (sans middleware auth)
        if (auth()->check()) {
            // Déconnexion de l'utilisateur
            auth()->logout();
            // Invalidation de la session
            $request->session()->invalidate();
            // Régénération du token de session
            $request->session()->regenerateToken();
            // Redirection vers la page d'accueil
            return redirect()->route('home');
        }
        // Si aucun utilisateur n'est connecté, redirection directe
        return redirect()->route('home')->with('error', 'Aucun utilisateur connecté.');
    }

}
