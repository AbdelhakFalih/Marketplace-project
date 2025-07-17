<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = ['user_id', 'name', 'technical_sheet', 'flyer', 'price', 'delivery_option', 'interest_count'];

    public function user()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}
