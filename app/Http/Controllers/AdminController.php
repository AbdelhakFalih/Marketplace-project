<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    // Affiche la liste des utilisateurs
    public function users()
    {
        $users = Utilisateur::all();
        return view('admin.users', compact('users'));
    }

    // Affiche la page de contact admin
    public function contact()
    {
        return view('admin.contact');
    }

    // Traite l’envoi du formulaire de contact
    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'sujet' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        // Exemple d’envoi d’email à l’admin
        Mail::raw($data['message'], function ($message) use ($data) {
            $message->to('admin@coopmaroc.ma')
                    ->subject('Contact admin: ' . $data['sujet']);
        });

        return redirect()->back()->with('success', 'Message envoyé à l\'administrateur.');
    }

    // Supprime un utilisateur
    public function destroy($id)
    {
        $user = Utilisateur::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users')->with('success', 'Utilisateur supprimé avec succès.');
    }

    // Affiche le dashboard admin
    public function dashboard()
    {
        $users = Utilisateur::all();
        return view('admin.dashboard', compact('users'));
    }

    // Affiche les détails d'un utilisateur
    public function show($id)
    {
        $user = Utilisateur::findOrFail($id);
        return view('admin.user_show', compact('user'));
    }
}
