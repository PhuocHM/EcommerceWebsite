<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'product_id', 'image', 'type'
    ];
    protected $primaryKey = 'id';
    protected $table = 'product_image';
    public $timestamps = true;
    
    public function product()
    {
        return $this->belongsTo(Products::class,'product_id','id');
    }
}
