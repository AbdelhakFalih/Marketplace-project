<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UtilisationController extends Controller
{
    public function welcome(){
        return view('Home');
    }

    public function Page($page){
        $action = $page;
        return view('Auth', compact('action'));
    }

    public function login(Request $request){
        /*$credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);*/
        $entred_password = $request->input('password');
        $existed_password = Utilisateur::where('email', $request->input('email'))->value('password');

        if ($entred_password == $existed_password) {

            $role = Utilisateur::where('email', $request->input('email'))->value('role');
            return view('User_Space', compact('role'))->with('success', 'Connexion réussie');
        }

        return back()->withErrors(['error' => __('errorMessage')])->withInput();
    }

    public function Inscrire(Request $request)
    {
        Log::info('Inscrire request received', ['input' => $request->all(), 'token' => $request->session()->token()]);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:cooperative,commerçant'
        ]);

        try {
            $user = Utilisateur::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => $validated['role']
            ]);

            Auth::login($user);
            $role = $user->role;
            return view('User_Space', compact('role'))->with('success', 'Inscription réussie');
        } catch (\Exception $e) {
            Log::error('Error in Inscrire', ['message' => $e->getMessage()]);
            return back()->withErrors(['error' => __('errorMessage') . ': ' . $e->getMessage()])->withInput();
        }
    }

    public function supprimerUser(Request $request)
    {
        $id = $request->input('id');
        $user = Utilisateur::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('page', ['page' => 'user-space'])->with('role', 'admin')->with('success', 'Utilisateur supprimé');
        }

        return view('Errors_Page', ['msg' => __('userNotFound')]);
    }

    public function editerUtilisateur(Request $request)
    {
        $id = $request->input('id');
        $user = Utilisateur::find($id);

        if ($user) {
            return view('formEdit', compact('user'));
        }

        return view('Errors_Page', ['msg' => __('userNotFound')]);
    }

    public function updateReservation(Request $request)
    {
        $id = $request->input('id');
        $user = Utilisateur::find($id);

        if ($user) {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:utilisateurs,email,' . $id,
                'password' => 'nullable|min:8|confirmed',
                'role' => 'required|in:cooperative,commerçant'
            ]);

            $user->name = $validated['name'];
            $user->email = $validated['email'];
            if ($validated['password']) {
                $user->password = Hash::make($validated['password']);
            }
            $user->role = $validated['role'];
            $user->save();

            return redirect('/user-space')->with('success', 'Profil mis à jour');
        }

        return view('Errors_Page', ['msg' => __('userNotFound')]);
    }

    public function afficher_plus(Request $request)
    {
        $id = $request->input('id');
        $user_data = Utilisateur::find($id);

        if ($user_data) {
            return view('Detail', compact('user_data'));
        }

        return view('Errors_Page', ['msg' => __('userNotFound')]);
    }

    public function showError()
    {
        $msg = session('error', __('errorMessage'));
        return view('Errors_Page', compact('msg'));
    }
}
