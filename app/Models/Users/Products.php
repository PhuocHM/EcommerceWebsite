<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\ProductImage;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function coverImage()
    {
        return $this->hasMany(ProductImage::class, 'product_id')->where('type', '=', 1);
    }

    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function comment()
    {
        return $this->hasMany(Comments::class);
    }

    public function attribute()
    {
        return $this->belongsToMany(Attributes::class, 'product_attributes', 'attribute_id', 'product_id');
    }

    public function user()
    {
        return  $this->belongsToMany(User::class, 'wishlist', 'product_id', 'supplier_id');
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
        return  $this->belongsToMany(Discounts::class, 'discount_product', 'product_id', 'discount_id');
    }

    public function supplier()
    {
        return $this->belongsToMany(Supplier::class, 'stock');
    }
}
