<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function orderItem()
    {
        $this->hasMany(OrderItems::class);
    }

    public function customer()
    {
        $this->belongsTo(Customers::class);
    }
}
