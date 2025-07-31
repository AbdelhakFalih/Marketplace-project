<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Utilisateur extends Authenticatable
{
    use Notifiable;
    protected $table = 'utilisateurs';
    protected $fillable = ['name', 'email', 'password', 'role', 'location', 'activity', 'facebook_url', 'instagram_url', 'x_url', 'points'];
    protected $hidden = ['password', 'remember_token'];
}
