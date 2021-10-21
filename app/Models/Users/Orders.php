<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function orderItem(){
        return  $this->hasMany(OrderItems::class);
    }

    public function customer(){
        return  $this->belongsTo(Customers::class);
    }
}
