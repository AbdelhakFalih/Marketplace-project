<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'type', 'name', 'description', 'city', 'deadline', 'interest_count'];

    public function user()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
