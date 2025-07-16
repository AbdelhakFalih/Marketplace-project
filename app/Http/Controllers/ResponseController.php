<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Notification;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $responses = auth()->user()->demandResponses;
        return view('responses.index', compact('responses'));
    }

    public function create()
    {
        $demands = Demand::all();
        return view('responses.create', compact('demands'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'demand_id' => ['required', 'exists:demands,id'],
            'message' => ['required', 'string'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $response = auth()->user()->demandResponses()->create([
            'demand_id' => $data['demand_id'],
            'message' => $data['message'],
        ]);

        $demand = Demand::find($data['demand_id']);
        $demand->interest_count = ($demand->interest_count ?? 0) + 1;
        $demand->save();

        $admin = Utilisateur::where('role', 'admin')->first();
        if ($admin) {
            Notification::create([
                'user_id' => $admin->id,
                'type' => $data['notification_type'],
                'message' => __(':user responded to demand: :name', ['user' => auth()->user()->name, 'name' => $demand->name]),
            ]);
        }

        Notification::create([
            'user_id' => $demand->user_id,
            'type' => $data['notification_type'],
            'message' => __(':user is interested in your demand: :name', ['user' => auth()->user()->name, 'name' => $demand->name]),
        ]);

        return redirect()->route('responses.index')->with('success', __('Response submitted'));
    }

    public function show($id)
    {
        $response = auth()->user()->demandResponses()->findOrFail($id);
        return view('responses.show', compact('response'));
    }

    public function edit($id)
    {
        $response = auth()->user()->demandResponses()->findOrFail($id);
        $demands = Demand::all();
        return view('responses.edit', compact('response', 'demands'));
    }

    public function update(Request $request, $id)
    {
        $response = auth()->user()->demandResponses()->findOrFail($id);
        $data = $request->validate([
            'demand_id' => ['required', 'exists:demands,id'],
            'message' => ['required', 'string'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $response->update([
            'demand_id' => $data['demand_id'],
            'message' => $data['message'],
        ]);

        $admin = Utilisateur::where('role', 'admin')->first();
        if ($admin) {
            Notification::create([
                'user_id' => $admin->id,
                'type' => $data['notification_type'],
                'message' => __(':user updated response for demand: :name', ['user' => auth()->user()->name, 'name' => $response->demand->name]),
            ]);
        }

        return redirect()->route('responses.index')->with('success', __('Response updated'));
    }

    public function destroy($id)
    {
        $response = auth()->user()->demandResponses()->findOrFail($id);
        $response->delete();
        return redirect()->route('responses.index')->with('success', __('Response deleted'));
    }
}
