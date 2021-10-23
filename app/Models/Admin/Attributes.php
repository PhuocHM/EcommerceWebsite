<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    use HasFactory;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'name', 'slug', 'category_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'attributes';
    public $timestamps = true;

    public function category(){
        return $this->belongsTo('App\Models\Admin\Category','category_id','id');
    }
}
