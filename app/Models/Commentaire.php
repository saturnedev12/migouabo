<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = ['contenu', 'user_id', 'article_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function article() {
        return $this->belongsTo(articles::class);
    }
}
