<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attributes;

class Categories extends Model
{
    use HasFactory;
    private $table = "categories";
    public function attributes()
    {
        return $this->hasMany(Attributes::class);
    }
}
