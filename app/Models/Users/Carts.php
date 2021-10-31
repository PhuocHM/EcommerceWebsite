<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\CartItem;

class Carts extends Model
{
    use HasFactory;
    protected $table = "carts";
    public function cart_item()
    {
        return $this->hasMany(CartItems::class, 'cart_id', 'id');
    }
}
