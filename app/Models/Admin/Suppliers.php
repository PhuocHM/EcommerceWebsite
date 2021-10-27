<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    public $timestamps = true;
    
    protected $fillable = [
        'name','slug', 'address', 'phone'
    ];
}
