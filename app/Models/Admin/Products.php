<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;
 
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

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
    public function attribute()
    {
        return $this->belongsToMany(Attributes::class,'product_attribute');
    }
    public function productImage()
    {
        return $this->hasMany(ProductImages::class);
    }
    public function discount()
    {
        return  $this->belongsToMany(Discounts::class, 'discount_product', 'product_id', 'discount_id');
    }
    public function orderItem()
    {
        return $this->belongsTo(Order::class,'brand_id','id');
    }
}
