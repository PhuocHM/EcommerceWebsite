<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\Products;

class ProductImage extends Model
{
    use HasFactory;
    protected $table = 'product_image';
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
