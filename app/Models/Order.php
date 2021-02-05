<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['number', 'status', 'user_id', 'shipping_address', 'notes'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
