<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
		protected $dates = [
			'created_at',
			'updated_at',
			// your other new column
		];

    public $timestamps = false; //set time to false
    protected $fillable = [
    	'name', 'slug', 'tag','quantity','sold','price','discount','description','status','image','brand_id','category_id','created_at','updated_at'
    ];
    protected $primaryKey = 'id';
 	protected $table = 'products';

 	public function category(){
 		return $this->belongsTo('App\Models\Category','category_id','id');
 	}

 	
}
