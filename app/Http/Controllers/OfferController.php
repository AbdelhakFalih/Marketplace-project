<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function showOffers()
    {
        $user_id = Auth::id();
        $offers = Offre::where('user_id', '!=', $user_id)->get();
        $page = "User Home";
        return view('User_Space.offers.index', [
            'offers' => $offers,
            'page' => $page,
            'user_id' => Auth::id()
        ]);    }

    // In app/Http/Controllers/OfferController.php

    public function show($id)
    {
        $offer = Offre::find($id);
        if (!$offer) {
            return redirect()->route('home')->with('error', __('Offer not found.'));
        }
        return view('User_Space.offers.show', compact('offer'));
    }

    public function showCreateFormOffers($id)
    {
        $user = Utilisateur::find($id);
        if (!$user || $user->id !== Auth::id()) {
            $this->showOffers()->with('error', __('Veuillez vous connecter pour publier une demande.'));
        }
        return view('User_Space.offers.create', compact('user'));
    }

    public function publierOffer(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:utilisateurs,id|in:'.Auth::id(),
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:100',
            'technical_sheet' => 'required|string',
            'flyer' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'price' => 'required|numeric|min:0',
            'delivery_conditions' => 'required|in:home,store1,store2,cooperative',
            'store1_city' => 'nullable|string|max:100',
            'store2_city' => 'nullable|string|max:100',
        ]);

        $offer = new Offre();
        $offer->user_id = $request->input('user_id');
        $offer->name = $request->input('name');
        $offer->type = $request->input('type');
        $offer->technical_sheet = $request->input('technical_sheet');
        $offer->price = $request->input('price');
        $offer->delivery_conditions = $request->input('delivery_conditions');
        $offer->store1_city = $request->input('store1_city');
        $offer->store2_city = $request->input('store2_city');

        if ($request->hasFile('flyer')) {
            $offer->flyer = $request->file('flyer')->store('flyers', 'public');
        }

        $offer->save();

        return redirect()->route('user.home');
    }

    public function showMyOffers($id)
    {
        $offers = Offre::where('user_id', $id)->get();
        if ($offers->isEmpty()) {
            $page = "Error";
        } else {
            $page = "My offers";
        }
        return view('User_Space.offers.index', compact('offers', 'page'));
    }

    public function edit($id)
    {
        $offer = Offre::find($id);
        if (!$offer || $offer->user_id !== Auth::id()) {
            return redirect()->route('home')->with('error', __('Offre non trouvée ou non autorisée.'));
        }
        return view('User_Space.offers.edit', compact('offer'));
    }

    public function interest(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', __('Veuillez vous connecter pour marquer un intérêt.'));
        }
        $offer = Offre::find($id);
        if (!$offer) {
            return redirect()->route('home')->with('error', __('Offre non trouvée.'));
        }
        $offer->interest_count = ($offer->interest_count ?? 0) + 1;
        $offer->save();
        return redirect()->back();
    }
}
