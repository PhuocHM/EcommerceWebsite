<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\ProductImage;
use App\Models\Users\Attributes;
use App\Models\Users\ProductAttribute;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function coverImage()
    {
        return $this->hasMany(ProductImage::class, 'id', 'product_id')->where('type', '=', 1);
    }

    public function cover2Image()
    {
        return $this->hasMany(ProductImage::class, 'product_id')->where('type', '=', 1);
    }

    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'product_id');
    }

    public function attribute()
    {
        return $this->belongsToMany(Attributes::class, 'product_attribute', 'attribute_id', 'product_id')->withPivot('content');
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
