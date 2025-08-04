<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailVerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $type_email;
    private string $title_email;
    private ?User $user;
    private ?string $token;

    public function __construct(?User $user, string $token)
    {
        $this->type_email = 'email.verification';
        $this->title_email = 'Vérification de votre adresse email';
        $this->user = $user;
        $this->token = $token;
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
                'name' => $this->user->name,
                'email' => $this->user->email,
                'user' => $this->user,
                'token' => $this->token,
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}
