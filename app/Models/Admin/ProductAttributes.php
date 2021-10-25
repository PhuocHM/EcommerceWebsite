<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductAttributes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'product_id', 'attribute_id', 'content'
    ];
    protected $primaryKey = 'id';
    protected $table = 'product_attribute';
    public $timestamps = true;

    public function product(){
        return $this->belongsTo(Products::class,'product_id','id');
    }
    public function attribute(){
        return $this->belongsTo(Attributes::class,'attribute_id','id');
    }
}
