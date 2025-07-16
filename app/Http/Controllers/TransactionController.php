<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Offer;
use App\Models\Demand;
use App\Models\Point;
use App\Models\Notification;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionConfirmation;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $transactions = auth()->user()->transactions;
        return view('transactions.index', compact('transactions'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'offer_id' => ['required', 'exists:offers,id'],
            'demand_id' => ['required', 'exists:demands,id'],
            'notification_type' => ['required', 'in:email,sms,whatsapp'],
        ]);

        $offer = Offer::find($data['offer_id']);
        $demand = Demand::find($data['demand_id']);
        $commission = $offer->user->created_at->diffInYears(now()) < 1 && $offer->user->role === 'cooperative' ? 0 : 0.05 * $offer->price;

        $transaction = Transaction::create([
            'offer_id' => $data['offer_id'],
            'demand_id' => $data['demand_id'],
            'user_id' => $offer->user_id,
            'commission' => $commission,
            'status' => 'pending',
        ]);

        Point::create(['user_id' => $offer->user_id, 'points' => 10]);

        Notification::create([
            'user_id' => $offer->user_id,
            'type' => $data['notification_type'],
            'message' => __('Offer linked to demand'),
        ]);

        Notification::create([
            'user_id' => $demand->user_id,
            'type' => $data['notification_type'],
            'message' => __('Demand linked to offer'),
        ]);

        return redirect()->route('transactions.index')->with('success', __('Transaction created'));
    }

    public function show($id)
    {
        $transaction = auth()->user()->transactions()->findOrFail($id);
        return view('transactions.show', compact('transaction'));
    }

    public function update(Request $request, $id)
    {
        $transaction = auth()->user()->transactions()->findOrFail($id);
        $transaction->update(['status' => 'completed']);
        Mail::to($transaction->user->email)->send(new TransactionConfirmation($transaction));
        return redirect()->route('transactions.index')->with('success', __('Transaction completed'));
    }
}

