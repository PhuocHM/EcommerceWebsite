<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    public function product(){
        return  $this->belongsTo(Products::class);
    }

    public function order(){
        return  $this->belongsTo(Orders::class);
    }
}
