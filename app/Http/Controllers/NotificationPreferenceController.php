<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
class NotificationPreferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        return view('notification_preferences.index', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        auth()->user()->update(['notification_type' => $data['notification_type']]);
        return redirect()->route('notification_preferences.index')->with('success', __('Preference updated'));
    }
}
