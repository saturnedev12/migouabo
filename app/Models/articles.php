<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articles extends Model
{
    use HasFactory;

    protected $fillable = ['titre','contenu','image','user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function commentaires() {
        return $this->hasMany(Commentaire::class);
    }

}
