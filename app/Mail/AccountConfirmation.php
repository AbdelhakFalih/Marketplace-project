<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Utilisateur;

class AccountConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @param Utilisateur $user
     * @return void
     */
    public function __construct(Utilisateur $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('Confirmation de votre compte'))
            ->view('emails.account_confirmation')
            ->with([
                'name' => $this->user->name,
                'email' => $this->user->email,
            ]);
    }
}
