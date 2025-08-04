<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard', [
            'title' => __('nav.dashboard'),
            'user' => auth()->user(),
        ]);
    }

    public function editProfile()
    {
        $user = auth()->user();
        $profile = $user->profile ?? new Profile();

        return view('user.profile.edit', [
            'title' => __('nav.profile_edit'),
            'user' => $user,
            'profile' => $profile,
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);
        $user->update($validated);

        if ($request->has('entity_name')) {
            $profileData = $request->validate([
                'entity_name' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'prefecture' => 'required|string|max:255',
                'activity' => 'required|string|max:255',
                'main_product' => 'required|string|max:255',
                'president_name' => 'nullable|string|max:255',
                'unique_number' => 'required|string|unique:profiles,unique_number,' . ($user->profile->id ?? 'NULL'),
            ]);
            $user->profile()->updateOrCreate(['user_id' => $user->id], $profileData);
        }

        return redirect()->back()->with('success', __('messages.profile_updated'));
    }

    public function editPassword()
    {
        return view('user.profile.password', [
            'title' => __('nav.password_edit'),
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => __('auth.password_incorrect')]);
        }

        $user->update(['password' => Hash::make($request->new_password)]);
        return redirect()->back()->with('success', __('messages.password_updated'));
    }
}
