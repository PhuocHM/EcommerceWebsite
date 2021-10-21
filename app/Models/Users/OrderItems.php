<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    public function product(){
        $this->belongsTo(Products::class);
    }

    public function order(){
        $this->belongsTo(Orders::class);
    }
}
