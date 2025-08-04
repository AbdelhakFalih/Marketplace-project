<?php

namespace App\Http\Controllers;

use App\Models\Demand;
use App\Models\Offre;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class DemandController extends Controller
{
    public function showCreateFormDemand($id)
    {
        $user = Utilisateur::find($id);
        if (!$user || $user->id !== Auth::id()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.')); ;
        }
        return view('User_Space.demands.create', compact('id'));
    }
    public function show($id)
    {
        $offer = Demand::find($id);
        if (!$offer) {
            return redirect()->route('home')->with('error', __('Offer not found.'));
        }
        return view('User_Space.demands.show', compact('offer'));
    }

    public function publierDemand(Request $request)
    {
        if (!Auth::check()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));
        }

        $validation = $request->validate([
            'user_id' => 'required|exists:utilisateurs,id|in:'.Auth::id(),
            'type' => 'required|in:product,service',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'city' => 'required|string|max:100',
            'deadline' => 'nullable|string|max:100',
        ]);

        $demande = new Demand();
        $demande->user_id = $request->user_id;
        $demande->type = $request->type;
        $demande->name = $request->name;
        $demande->description = $request->description;
        $demande->city = $request->city;
        $demande->deadline = $request->deadline;
        $demande->save();

        // Send email notification to user
        $user = Auth::user();
        Mail::raw(
            __('Votre demande :name a été publiée avec succès.', ['name' => $demande->name]),
            function ($message) use ($user) {
                $message->to($user->email)
                    ->subject(__('Demande publiée'));
            }
        );

        return redirect()->route('user.demands')->with('success', __('Demande publiée avec succès.'));
    }

    public function showMyDemands($id)
    {
        if (!Auth::check() || $id !== Auth::id()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));
        }
        $demands = Demand::where('user_id', $id)->get();
        return view('User_Space.demands.index', compact('demands'));
    }

    public function show_demand_detail($id)
    {
        $demand = Demand::findOrFail($id);
        return view('User_Space.demands.show', compact('demand'));
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));
        }
        $demand = Demand::findOrFail($id);
        if ($demand->user_id !== Auth::id()) {
            return redirect()->route('user.demands')->with('error', __('Vous n\'êtes pas autorisé à modifier cette demande.'));
        }
        return view('User_Space.demands.edit', compact('demand'));
    }

    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));
        }
        $demand = Demand::findOrFail($id);
        if ($demand->user_id !== Auth::id()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));
        }

        $validation = $request->validate([
            'type' => 'required|in:product,service',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'city' => 'required|string|max:100',
            'deadline' => 'nullable|string|max:100',
        ]);

        $demand->update($validation);

        return redirect()->route('user.demands')->with('success', __('Demande mise à jour avec succès.'));
    }

    public function respond(Request $request, $id)
    {
        if (!Auth::check()) {
            (new OfferController)->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));;
        }
        $demand = Demand::findOrFail($id);
        if ($demand->user_id === Auth::id()) {
            return redirect()->route('user.demands')->with('error', __('Vous ne pouvez pas répondre à votre propre demande.'));
        }

        // Increment interest count
        $demand->interest_count = ($demand->interest_count ?? 0) + 1;
        $demand->save();

        // Notify admin and demand owner
        $admin = Utilisateur::where('role', 'admin')->first();
        $owner = Utilisateur::find($demand->user_id);
        if ($admin) {
            Mail::raw(
                __('Un utilisateur a manifesté un intérêt pour la demande : :name', ['name' => $demand->name]),
                function ($message) use ($admin) {
                    $message->to($admin->email)
                        ->subject(__('Nouvel intérêt pour une demande'));
                }
            );
        }
        if ($owner) {
            Mail::raw(
                __('Un utilisateur a manifesté un intérêt pour votre demande : :name', ['name' => $demand->name]),
                function ($message) use ($owner) {
                    $message->to($owner->email)
                        ->subject(__('Intérêt pour votre demande'));
                }
            );
        }

        return redirect()->route('user.demands')->with('success', __('Intérêt enregistré. L\'administrateur vous contactera.'));
    }
}
