<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function image()
    {
        $this->hasMany(ProductsImages::class);
    }

    public function comment()
    {
        $this->hasMany(Comments::class);
    }

    public function attribute()
    {
        $this->belongsToMany(Attributes::class, 'product_attributes');
    }

    public function user()
    {
        $this->belongsToMany(User::class, 'wishlist');
    }

    public function orderItem()
    {
        $this->hasMany(OrderItem::class);
    }

    public function cartItem()
    {
        $this->hasMany(OrderItem::class);
    }
}
