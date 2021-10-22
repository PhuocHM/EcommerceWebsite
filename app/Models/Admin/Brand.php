<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    use HasFactory;
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
}
