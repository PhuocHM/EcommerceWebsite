<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'code', 'name', 'slug','sold','price','description','status','brand_id','category_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'products';
    public $timestamps = true;

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function attribute(){
        return $this->belongsToMany(Attributes::class,'product_attribute');
    }
    public function productImage(){
        return $this->hasMany(ProductImages::class);
    }

}