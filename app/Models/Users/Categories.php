<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attributes;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";
    public function attribute()
    {
        return $this->hasMany(Attributes::class);
    }

    public function product(){
        return $this->hasMany(Products::class);
    }
}
