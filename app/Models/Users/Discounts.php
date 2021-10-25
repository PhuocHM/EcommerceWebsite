<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    use HasFactory;
    protected $table = 'discounts';

    public function product(){
        return $this->belongsToMany(Products::class, 'discount_product');
    }
}
// End Here
