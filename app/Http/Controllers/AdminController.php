<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Offre;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'users' => User::count(),
            'profiles' => Profile::count(),
            'offers' => Offre::count(),
            'transactions' => Transaction::count(),
        ];

        return view('admin.dashboard', [
            'title' => __('nav.dashboard'),
            'stats' => $stats,
        ]);
    }

    public function usersIndex()
    {
        $users = User::with('profile')->paginate(10);
        return view('admin.users.index', [
            'title' => __('users.title'),
            'users' => $users,
        ]);
    }

    public function usersEdit($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('admin.users.edit', [
            'title' => __('users.edit'),
            'user' => $user,
        ]);
    }

    public function usersUpdate(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:cooperative,commerçant,admin',
        ]);
        $user->update($validated);
        return redirect()->route('admin.users.index')->with('success', __('messages.user_updated'));
    }

    public function stats()
    {
        $usersCount = User::count();
        $offersCount = Offre::count();
        $transactionsTotal = Transaction::sum('amount');

        return view('admin.stats', [
            'title' => __('admin.stats'),
            'users' => $usersCount,
            'offers' => $offersCount,
            'transactions' => $transactionsTotal,
        ]);
    }
    public function usersDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', __('messages.user_deleted'));
    }
}
