<?php

namespace App\Http\Controllers;


use App\Models\Profile;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProfileValidation;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $profiles = auth()->user()->profiles;
        return view('profile.index', compact('profiles'));
    }

    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:cooperative,merchant'],
            'locality' => ['required', 'string', 'max:255'],
            'activity' => ['required', 'string', 'max:255'],
            'main_product' => ['required_if:type,cooperative', 'nullable', 'string', 'max:255'],
            'president_name' => ['required_if:type,cooperative', 'nullable', 'string', 'max:255'],
            'unique_number' => ['required_if:type,cooperative', 'nullable', 'string', 'max:255'],
            'patente_number' => ['required_if:type,merchant', 'nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'x_profile' => ['nullable', 'url'],
        ]);

        $profile = auth()->user()->profiles()->create($data);

        $admin = Utilisateur::where('role', 'admin')->first();
        if ($admin) {
            Mail::to($admin->email)->send(new ProfileValidation($profile));
        }

        return redirect()->route('profile.validation')->with('success', __('Profile submitted'));
    }

    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.show', compact('profile'));
    }

    public function edit($id)
    {
        $profile = auth()->user()->profiles()->findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = auth()->user()->profiles()->findOrFail($id);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:cooperative,merchant'],
            'locality' => ['required', 'string', 'max:255'],
            'activity' => ['required', 'string', 'max:255'],
            'main_product' => ['required_if:type,cooperative', 'nullable', 'string', 'max:255'],
            'president_name' => ['required_if:type,cooperative', 'nullable', 'string', 'max:255'],
            'unique_number' => ['required_if:type,cooperative', 'nullable', 'string', 'max:255'],
            'patente_number' => ['required_if:type,merchant', 'nullable', 'string', 'max:255'],
            'facebook' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'x_profile' => ['nullable', 'url'],
        ]);

        $profile->update($data);
        return redirect()->route('profile.index')->with('success', __('Profile updated'));
    }

    public function destroy($id)
    {
        $profile = auth()->user()->profiles()->findOrFail($id);
        $profile->delete();
        return redirect()->route('profile.index')->with('success', __('Profile deleted'));
    }
}
