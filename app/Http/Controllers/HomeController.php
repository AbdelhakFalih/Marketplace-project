<?php

namespace App\Http\Controllers;

use App\Mail\ProfileMail;
use App\Models\Offre;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $produit_vedette = Offre::where('type','produit')->get();
        return view('home.Home',compact('produit_vedette'));
    }
    public function about(){
        return view('home.about');
    }
    public function contact(){
        return view('home.contact');
    }
    public function products(){
        $products = Offre::where('type','produit')->get();
        return view('home.produits',compact('products'));
    }
    public function cooperative(){
        $cooperatives = Utilisateur::where('role','cooperative')->get();
        return view('home.cooperatives',compact('cooperatives'));
    }

}
