<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetSuccessMail;
use App\Models\Utilisateur;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    // Profile edit :
    public function showProfile($id)
    {
        $user = Utilisateur::find($id);
        if (!$user) {
            $msg = 'User not found.';
            return view('User_Space.profile.edit-profile', compact('msg'));
        }
        return view('User_Space.profile.edit-profile', compact('user'));
    }
    public function updateProfile(Request $request)
    {
        $user = Utilisateur::find($request->id);
        if (!$user) {
            $msg = 'Erreur durant la modfication . Veuillez réessayer ultérieurement.';
            return view('User_Space.profile.edit-profile', compact('msg'));
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();
        return redirect()->route('user.home');
    }

    // Password reset functionality :
    public function reset_password($id){
        $user = Utilisateur::find($id);
        return view('User_Space.profile.reset', compact('user'));
    }

    public function UserDashboard($id)
    {
        $user = Utilisateur::find($id);
        if (!$user) {
            $msg = 'User not found.';
            return view('User_Space.profile.Dashboard_User');
        }
        return view('User_Space.profile.Dashboard_User', compact('user'));
    }

    public function reset(Request $request){
        $user = Utilisateur::find($request->id);
        if( $request->input('password') == $request->input('password_confirmation') ){
            $user->password = $request->input('password');
            $user->save();
            Mail::to('abdou2018.falih@gmail.com')->send(new PasswordResetSuccessMail($user));
            return redirect()->route('login')->with('success', 'Password reset successfully.');
        } else {
            return redirect()->back()->withErrors(['password' => 'Passwords do not match.']);
        }
    }
}
