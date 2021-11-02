<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\Categories;
use App\Models\Users\Products;
use App\Models\Users\ProductAttribute;

class Attributes extends Model
{
    use HasFactory;
   
    
    protected $table = "attributes";

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function product()
    {
        return $this->belongsToMany(Products::class, 'product_attribute', 'attribute_id', 'product_id')->withPivot('content');
    }

    public function attribute_values()
    {
        return $this->hasMany(ProductAttribute::class, 'attribute_id', 'id')->groupBy('content');
    }
}
