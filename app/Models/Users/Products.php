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
        return $this->hasMany(ProductsImages::class);
    }

    public function comment()
    {
        return $this->hasMany(Comments::class);
    }

    public function attribute()
    {
        return $this->belongsToMany(Attributes::class, 'product_attributes');
    }

    public function user()
    {
        return  $this->belongsToMany(User::class, 'wishlist');
    }

    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function cartItem()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function discount()
    {
        return  $this->belongsToMany(Discounts::class, 'discount_product');
    }

    public function supplier(){
        return $this->belongsToMany(Supplier::class, 'stock');
    }
}
