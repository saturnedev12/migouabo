<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'icon', 'description', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function souscategories() {
        return $this->hasMany(SousCategorie::class);
    }
}
