<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	use HasFactory;
	protected $dates = [
		'created_at',
		'updated_at',
	];
	public $timestamps = false;
	protected $fillable = [
		'id', 'code', 'name', 'slug', 'tag', 'sold', 'price', 'description', 'status', 'brand_id', 'category_id', 'created_at', 'updated_at'
	];
	protected $primaryKey = 'id';
	protected $table = 'products';

	public function category()
	{
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	public function brand()
	{
		return $this->belongsTo(Brand::class, 'brand_id', 'id');
	}
}
