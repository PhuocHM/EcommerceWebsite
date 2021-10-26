<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\Categories;
use App\Models\Users\Products;

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
        return $this->belongsToMany(Products::class, 'product_attribute', 'product_id', 'attribute_id')->withPivot('content');
    }
}
