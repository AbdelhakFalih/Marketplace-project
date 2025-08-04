<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PhoneVerificationNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $type_email;
    private string $title_email;
    private ?User $user;

    public function __construct(?User $user)
    {
        $this->type_email = 'email.phone_verification';
        $this->title_email = 'Vérification de votre numéro de téléphone';
        $this->user = $user;
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
            ]
        );
    }

    public function attachments()
    {
        return [];
    }
}

