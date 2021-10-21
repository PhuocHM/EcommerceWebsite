<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    private $table = "brands";

    public function product(){
        return $this->hasMany(Products::class);
    }
}
