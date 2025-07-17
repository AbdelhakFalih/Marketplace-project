<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Notification;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $interests = auth()->user()->interests;
        return view('interests.index', compact('interests'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'demand_id' => ['required', 'exists:demands,id'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $interest = auth()->user()->interests()->create(['demand_id' => $data['demand_id']]);
        $demand = Demand::find($data['demand_id']);
        $demand->interest_count = ($demand->interest_count ?? 0) + 1;
        $demand->save();

        $admin = Utilisateur::where('role', 'admin')->first();
        if ($admin) {
            Notification::create([
                'user_id' => $admin->id,
                'type' => $data['notification_type'],
                'message' => __(':user interested in demand: :name', ['user' => auth()->user()->name, 'name' => $demand->name]),
            ]);
        }

        Notification::create([
            'user_id' => $demand->user_id,
            'type' => $data['notification_type'],
            'message' => __(':user is interested in your demand: :name', ['user' => auth()->user()->name, 'name' => $demand->name]),
        ]);

        return redirect()->route('interests.index')->with('success', __('Interest recorded'));
    }
}
