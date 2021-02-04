<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'quantity', 'price', 'name', 'order_id', 'produit_id'];
    public function produit() {
        return $this->belongsTo(Produit::class);
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
