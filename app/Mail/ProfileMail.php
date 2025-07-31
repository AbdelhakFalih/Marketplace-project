<?php

namespace App\Mail;

use App\Models\Utilisateur;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProfileMail extends Mailable
{
    use Queueable, SerializesModels;

    private string $type_email;
    private string $title_email;
    private ?Utilisateur $user;
    private ?string $url;

    public function __construct(?Utilisateur $user, string $type_email, ?string $url = null)
    {
        if ($type_email === 'confirmation') {
            $this->type_email = 'email.account_confirmation';
            $this->title_email = 'Confirmation de compte';
        } else {
            $this->type_email = 'email.profile_valisation';
            $this->title_email = 'Validation de profil';
        }
        $this->user = $user;
        $this->url = $url;
    }

    public function envelope()
    {
        return new Envelope(
            subject: $this->title_email,
        );
    }

    public function content()
    {
        if ($this->type_email === 'email.account_confirmation') {
            return new Content(
                view: $this->type_email,
                with: [
                    'url' => $this->url,
                ]
            );
        } else {
            $id = $this->user->id;
            $date = $this->user->created_at;
            $href = base64_encode($date . '///' . $id);
            return new Content(
                view: $this->type_email,
                with: [
                    'name' => $this->user->name,
                    'email' => $this->user->email,
                    'user' => $this->user,
                    'href' => $href,
                ]
            );
        }
    }

    public function attachments()
    {
        return [];
    }
}
