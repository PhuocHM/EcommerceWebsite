<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attributes;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";
    public function attributes()
    {
        return $this->hasMany(Attributes::class);
    }

    public function products(){
        return $this->hasMany(Products::class);
    }
}
