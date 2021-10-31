<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'product_id', 'price', 'quantity', 'order_id',
    ];
    protected $table = 'order_items';
    public $timestamps = true;

    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
}
