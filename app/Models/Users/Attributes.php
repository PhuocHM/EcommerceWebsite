<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users\Categories;

class Attributes extends Model
{
    use HasFactory;
    private $table = "attributes";

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function product(){
        return $this->belongsToMany(Products::class, 'product_attributes');
    }
}
