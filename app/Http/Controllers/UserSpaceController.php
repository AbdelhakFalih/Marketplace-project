<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Demand;
use App\Models\Utilisateur;
class UserSpaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = auth()->user();
        $role = $user->role;

        if ($role === 'admin') {
            $users = Utilisateur::all();
            $offers = Offer::all();
            return view('user_space', compact('role', 'users', 'offers'));
        }

        $stats = [
            'offers_count' => $user->offers()->count(),
            'demands_count' => $user->demands()->count(),
            'points' => $user->points()->sum('points'),
        ];
        return view('user_space', compact('role', 'stats'));
    }
}
