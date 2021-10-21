<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;

class Cart extends Model
{
    use HasFactory;
    private $table = "cart";
    public function cart_item()
    {
        return $this->hasMany(CartItem::class);
    }

    
}
