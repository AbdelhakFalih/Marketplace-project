<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Profile;

class ProfileValidation extends Mailable
{
    use Queueable, SerializesModels;

    public $profile;

    /**
     * Create a new message instance.
     *
     * @param Profile $profile
     * @return void
     */
    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('Profile Validation Request'))
            ->view('emails.profile_validation')
            ->with([
                'profile_name' => $this->profile->name,
                'user_name' => $this->profile->user->name,
                'type' => $this->profile->type,
            ]);
    }
}
