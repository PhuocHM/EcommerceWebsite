<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\Carts;
use App\Models\Users\Products;

class CartItems extends Model
{
    use HasFactory;
    protected $table = "cart_items";
    public function cart()
    {
        return $this->belongsTo(Carts::class, 'cart_id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
