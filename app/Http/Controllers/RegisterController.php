<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function ShowRegisterForm()
    {
        $action = 'register';
        return view('auth.Auth',compact('action'));
    }

    public function Register(Request $request){
        $validation = $request->validate([
            'nom'      => ['required'],
            'email'    => ['required', 'email'],
            'password' => ['required','confirmed'],
        ]);
        if ( $validation['password']) {
            $user = new Utilisateur();
            $user->nom = $request->input('nom');
            $user->email = $request->input('email');
            $user->password = $request->input('password');
            $user->save();
            return redirect()->route('login');
        }
    }
}
