<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Offre;
class HomeController extends Controller
{
    public function index()
    {
        $featured_products = Offre::inRandomOrder()->take(3)->get();
        return view('Home', compact('featured_products'));
    }
}
