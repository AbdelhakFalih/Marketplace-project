<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Models\Offre ;
use App\Models\Demand;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function showDashboard(){
        return view('admin.dashboard');
    }

    public function UsersList(){
        $users = Utilisateur::all();
        return view('admin.user_show',compact('users'));
    }
    public function ShowUser($id){
        $user = Utilisateur::find($id);
        return view('admin.User_Detail',compact('user'));
    }
    public function ShowStatistics(){
        $totalUsers = Utilisateur::count();
        $totalCooperatives = Utilisateur::where('role', 'cooperative')->count();
        $totalCommercants = Utilisateur::where('role', 'commercant')->count();
        $totalProduits = Offre::where('type', 'produit')->count();
        $totalServices = Offre::where('type', 'service')->count();
        $totalOffres = Offre::count();
        $totalDemandes = Demand::count();
        $totalTransactions = Transaction::count();

        return view('admin.Statistics', compact(
            'totalUsers',
            'totalCooperatives',
            'totalCommercants',
            'totalProduits',
            'totalServices',
            'totalOffres',
            'totalDemandes',
            'totalTransactions'
        ));
    }
    public function UpdateForm(Request $request){
        $user = Utilisateur::find($request->input('id'));
        return view('admin.FormEdit',compact('user'));
    }
    public function UpdateUser(Request $request){
        $user = Utilisateur::find($request->input('id'));
        $user->nom = $request->input('nom');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->save();
        return redirect()->route('admin.User_Management');
    }
    public function DeleteUser($id){
        $user = Utilisateur::find($id);
        $user->delete();
        return redirect()->route('admin.User_Management');
    }
}
