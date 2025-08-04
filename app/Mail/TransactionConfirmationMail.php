<?php

namespace App\Mail;

use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TransactionVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $type_email;
    private string $title_email;
    private ?Transaction $transaction;

    public function __construct(?Transaction $transaction)
    {
        $this->type_email = 'email.transaction_verification';
        $this->title_email = 'Vérification de votre transaction';
        $this->transaction = $transaction;
    }

    public function envelope()
    {
        return new Envelope(
            subject: $this->title_email,
        );
    }

    public function content()
    {
        return new Content(
            view: $this->type_email,
            with: [
                'transaction' => $this->transaction,
                'amount' => $this->transaction->amount,
                'offer_name' => $this->transaction->offer->name,
                'status' => $this->transaction->status,
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}

