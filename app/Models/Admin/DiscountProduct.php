<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountProduct extends Model
{
    use HasFactory;
   
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
     'product_id ', 'discount_id '
    ];
    protected $primaryKey = 'id';
    protected $table = 'discount_product';
    public $timestamps = true;

    public function product(){
        return $this->belongsTo(Products::class,'product_id','id');
    }
    public function discount(){
        return $this->belongsTo(Discounts::class,'discount_id','id');
    }
    
}
