<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Discounts extends Model
{
    use HasFactory;
 
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'amounts', 'start_day', 'expired_day', 'description','image','name'
    ];
    protected $primaryKey = 'id';
    protected $table = 'discounts';
    public $timestamps = true;
    public function discount()
    {
        return $this->belongsToMany(Products::class, 'discount_product', 'product_id', 'discount_id');
    }

}
