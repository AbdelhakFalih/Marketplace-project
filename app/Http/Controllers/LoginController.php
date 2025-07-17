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
            return view('User_space',compact('role'));
        }

        return back()->withErrors(['email' => __('auth.failed')]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

}
