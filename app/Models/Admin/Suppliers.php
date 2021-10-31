<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    public $timestamps = true;

    protected $fillable = [
        'name', 'slug', 'address', 'phone'
    ];

    public function product()
    {
        return $this->belongsToMany(Products::class, 'stocks', 'product_id', 'supplier_id')->withPivot('employee_id', 'quantity', 'cost_price', 'created_at', 'updated_at');
    }
}
