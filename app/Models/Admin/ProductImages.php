<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImages extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $fillable = [
        'amounts', 'start_day', 'expired_day', 'description', 'image'
    ];

    protected $primaryKey = 'id';
    protected $table = 'product_image';
    public $timestamps = true;

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
