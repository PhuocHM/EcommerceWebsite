<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;

class Carts extends Model
{
    use HasFactory;
    protected $table = "carts";
    public function cart_item()
    {
        return $this->hasMany(CartItem::class);
    }


}
