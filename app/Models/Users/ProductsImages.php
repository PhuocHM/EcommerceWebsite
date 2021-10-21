<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsImages extends Model
{
    use HasFactory;
    protected $table = 'products_images';
    public function product()
    {
        $this->belongsTo(Products::class);
    }
}
