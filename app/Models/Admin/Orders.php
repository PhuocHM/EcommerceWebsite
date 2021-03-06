<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'code', 'customer_id', 'payment_method', 'total_price', 'status'
    ];
    protected $table = 'orders';
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customers::class, 'customer_id', 'id');
    }
    public function oderItem()
    {
        return $this->hasMany(OrderItems::class);
    }
}
