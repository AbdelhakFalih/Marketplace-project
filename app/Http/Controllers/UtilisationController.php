<?php
namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Offre;
use App\Models\Demand;
use App\Models\Transaction;
use App\Models\Profile;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountConfirmation;
use App\Mail\TransactionConfirmation;
use App\Mail\ProfileValidation;

class UtilisationController extends Controller
{
    public function welcome()
    {
        $featured_products = Offre::inRandomOrder()->take(3)->get();
        return view('home', compact('featured_products'));
    }

    public function Page($page)
    {
        $action = $page;
        return view('auth', compact('action'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = Auth::user()->role;
            return redirect()->route('user_space', ['role' => $role])->with('success', __('Connexion réussie'));
        }

        return back()->withErrors(['email' => __('auth.failed')])->withInput();
    }

    public function Inscrire(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:utilisateurs,email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'role' => ['required', 'in:cooperative,commerçant'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $user = Utilisateur::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
            'notification_type' => $validated['notification_type'],
        ]);

        Mail::to($user->email)->send(new AccountConfirmation($user));
        Auth::login($user);
        return redirect()->route('auth.confirmation')->with('success', __('Inscription réussie'));
    }

    public function supprimerUser(Request $request)
    {
        $id = $request->input('id');
        $user = Utilisateur::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('user_space')->with('success', __('Utilisateur supprimé'));
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

        if ($user && (auth()->check() && (auth()->user()->role === 'admin' || auth()->user()->id === $id))) {
            $validated = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'unique:utilisateurs,email,' . $id],
                'password' => ['nullable', 'min:8', 'confirmed'],
                'role' => ['required', 'in:cooperative,commerçant'],
                'notification_type' => ['required', 'in:email,sms,whatsapp'],
            ]);

            $user->name = $validated['name'];
            $user->email = $validated['email'];
            if ($validated['password']) {
                $user->password = Hash::make($validated['password']);
            }
            $user->role = $validated['role'];
            $user->notification_type = $validated['notification_type'];
            $user->save();

            return redirect()->route('user_space')->with('success', __('Profil mis à jour'));
        }

        return view('Errors_Page', ['msg' => __('userNotFound')]);
    }

    public function afficher_plus(Request $request)
    {
        $id = $request->input('id');
        $user_data = Utilisateur::find($id);

        if ($user_data) {
            return view('detail', compact('user_data'));
        }

        return view('Errors_Page', ['msg' => __('userNotFound')]);
    }

    public function showError()
    {
        $msg = session('error', __('errorMessage'));
        return view('Errors_Page', compact('msg'));
    }
}
