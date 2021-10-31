<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    public function product()
    {
        return $this->belongsToMany(Products::class, 'stocks', 'product_id', 'supplier_id');
    }
}
