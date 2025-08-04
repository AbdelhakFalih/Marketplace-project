<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TransactionVerification;
use App\Mail\TransactionConfirmation;
use Illuminate\Routing\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['offer', 'buyer', 'seller'])->paginate(10);
        return view('transactions.index', [
            'title' => __('nav.transactions'),
            'transactions' => $transactions,
        ]);
    }

    public function create($offerId)
    {
        $offer = Offre::findOrFail($offerId);
        return view('transactions.create', [
            'title' => __('transactions.create'),
            'offer' => $offer,
        ]);
    }

    public function store(Request $request, $offerId)
    {
        $offer = Offre::findOrFail($offerId);
        $request->validate([
            'amount' => 'required|numeric',
            'status' => 'required|in:pending,completed,canceled',
        ]);
        $transaction = Transaction::create([
            'offer_id' => $offerId,
            'buyer_id' => auth()->id(),
            'seller_id' => $offer->user_id,
            'amount' => $request->amount,
            'status' => $request->status,
        ]);
        Mail::to(auth()->user()->email)->send(new TransactionVerification($transaction));
        if ($request->status === 'completed') {
            Mail::to($offer->user->email)->send(new TransactionConfirmation($transaction));
        }
        return redirect()->route('transactions.index')->with('success', __('messages.transaction_created'));
    }
}
