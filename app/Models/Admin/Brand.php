<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'id', 'name', 'slug', 'image'
    ];
    protected $primaryKey = 'id';
    protected $table = 'brands';
    public $timestamps = true;
    
    public function product(){
        return $this->hasMany(Products::class);
    }
}
