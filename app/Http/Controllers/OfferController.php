<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Notification;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('publicIndex');
    }

    public function index()
    {
        $offers = auth()->user()->offers;
        return view('offers.index', compact('offers'));
    }

    public function create()
    {
        return view('offers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'technical_sheet' => ['required', 'string'],
            'flyer' => ['nullable', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
            'price' => ['required', 'numeric', 'min:0'],
            'delivery_option' => ['required', 'in:home,store1,store2,cooperative'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        if ($request->hasFile('flyer')) {
            $data['flyer'] = $request->file('flyer')->store('flyers', 'public');
        }

        $offer = auth()->user()->offers()->create($data);

        $admin = Utilisateur::where('role', 'admin')->first();
        if ($admin) {
            Notification::create([
                'user_id' => $admin->id,
                'type' => $data['notification_type'],
                'message' => __('New offer: :name', ['name' => $offer->name]),
            ]);
        }

        return redirect()->route('offers.index')->with('success', __('Offer created'));
    }

    public function show($id)
    {
        $offer = Offer::findOrFail($id);
        return view('offers.show', compact('offer'));
    }

    public function edit($id)
    {
        $offer = auth()->user()->offers()->findOrFail($id);
        return view('offers.edit', compact('offer'));
    }

    public function update(Request $request, $id)
    {
        $offer = auth()->user()->offers()->findOrFail($id);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'technical_sheet' => ['required', 'string'],
            'flyer' => ['nullable', 'file', 'mimes:jpg,png,pdf', 'max:2048'],
            'price' => ['required', 'numeric', 'min:0'],
            'delivery_option' => ['required', 'in:home,store1,store2,cooperative'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        if ($request->hasFile('flyer')) {
            if ($offer->flyer) {
                Storage::disk('public')->delete($offer->flyer);
            }
            $data['flyer'] = $request->file('flyer')->store('flyers', 'public');
        }

        $offer->update($data);
        return redirect()->route('offers.index')->with('success', __('Offer updated'));
    }

    public function destroy($id)
    {
        $offer = auth()->user()->offers()->findOrFail($id);
        if ($offer->flyer) {
            Storage::disk('public')->delete($offer->flyer);
        }
        $offer->delete();
        return redirect()->route('offers.index')->with('success', __('Offer deleted'));
    }

    public function publicIndex()
    {
        $offers = Offer::all();
        return view('products.index', compact('offers'));
    }
}
