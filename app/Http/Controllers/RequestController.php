<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Notification;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $demands = auth()->user()->demands;
        return view('demands.index', compact('demands'));
    }

    public function create()
    {
        return view('demands.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => ['required', 'in:product,service'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'city' => ['required', 'string', 'max:255'],
            'deadline' => ['nullable', 'date'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $demand = auth()->user()->demands()->create($data);

        $admin = Utilisateur::where('role', 'admin')->first();
        if ($admin) {
            Notification::create([
                'user_id' => $admin->id,
                'type' => $data['notification_type'],
                'message' => __('New demand: :name', ['name' => $demand->name]),
            ]);
        }

        return redirect()->route('requests.index')->with('success', __('Demand created'));
    }

    public function show($id)
    {
        $demand = auth()->user()->demands()->findOrFail($id);
        return view('demands.show', compact('demand'));
    }

    public function edit($id)
    {
        $demand = auth()->user()->demands()->findOrFail($id);
        return view('demands.edit', compact('demand'));
    }

    public function update(Request $request, $id)
    {
        $demand = auth()->user()->demands()->findOrFail($id);
        $data = $request->validate([
            'type' => ['required', 'in:product,service'],
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'city' => ['required', 'string', 'max:255'],
            'deadline' => ['nullable', 'date'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $demand->update($data);
        return redirect()->route('requests.index')->with('success', __('Demand updated'));
    }

    public function destroy($id)
    {
        $demand = auth()->user()->demands()->findOrFail($id);
        $demand->delete();
        return redirect()->route('requests.index')->with('success', __('Demand deleted'));
    }
}
