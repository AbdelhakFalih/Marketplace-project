<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class OfferController extends Controller
{
    public function index()
    {
        $offers = Offre::with('user')->paginate(10);
        return view('offers.index', [
            'title' => __('nav.offers'),
            'offers' => $offers,
        ]);
    }

    public function create()
    {
        return view('offers.create', [
            'title' => __('offers.create'),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'delivery_conditions' => 'required|in:home,store1,store2,cooperative',
        ]);
        Offre::create(array_merge($request->all(), ['user_id' => auth()->id()]));
        return redirect()->route('offers.index')->with('success', __('messages.offer_created'));
    }
}
