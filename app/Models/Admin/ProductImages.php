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
        'amounts', 'start_day', 'expired_day','description','image'
    ];
    protected $primaryKey = 'id';
    protected $table = 'product_image';
    public $timestamps = true;
    
   
}
