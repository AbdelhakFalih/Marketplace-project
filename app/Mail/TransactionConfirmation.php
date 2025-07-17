<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Transaction;

class TransactionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $transaction;

    /**
     * Create a new message instance.
     *
     * @param Transaction $transaction
     * @return void
     */
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('Transaction Confirmation'))
            ->view('emails.transaction_confirmation')
            ->with([
                'user_name' => $this->transaction->user->name,
                'offer_name' => $this->transaction->offer->name,
                'commission' => $this->transaction->commission,
            ]);
    }
}
