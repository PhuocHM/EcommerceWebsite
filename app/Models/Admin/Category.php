<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // use Sortable;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    // public $sortable = ['id','name','slug','description','parent_id','parent_id'];
    protected $fillable = [
        'id', 'name', 'slug', 'description', 'parent_id', 'status'
    ];
    protected $primaryKey = 'id';
    protected $table = 'categories';
    public $timestamps = true;

    public function attributes()
    {
        return $this->hasMany(Attributes::class);
    }

    public function product()
    {
        return $this->hasMany(Products::class);
    }
}
