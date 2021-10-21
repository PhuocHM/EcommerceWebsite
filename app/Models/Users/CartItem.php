<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Products;

class CartItem extends Model
{
    use HasFactory;
    private $table = "cart_item";
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
