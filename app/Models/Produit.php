<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'souscategorie_id', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function souscategorie() {
        return $this->belongsTo(SousCategorie::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
