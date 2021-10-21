<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Attributes extends Model
{
    use HasFactory;
    private $table = "attributes";
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
