<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'code', 'name', 'slug', 'price', 'description', 'status', 'brand_id', 'category_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'products';
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function attribute()
    {
        return $this->belongsToMany(Attributes::class, 'product_attribute', 'product_id', 'attribute_id')->withPivot('content');
    }
    public function productImage()
    {
        return $this->hasMany(ProductImages::class, 'product_id');
    }

    public function supplier()
    {
        return $this->belongsToMany(Suppliers::class, 'stocks', 'product_id', 'supplier_id')->withPivot('employee_id', 'quantity', 'cost_price', 'created_at', 'updated_at');
    }

    public function comment()
    {
        return $this->hasMany(Comments::class, 'product_id');
    }

    public function discount()
    {
        return  $this->belongsToMany(Discounts::class, 'discount_product', 'product_id', 'discount_id');
    }
    public function orderItem()
    {
        return $this->hasMany(Order::class, 'product_id', 'id');
    }
}
