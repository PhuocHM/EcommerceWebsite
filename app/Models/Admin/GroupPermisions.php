<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupPermisions extends Model
{
    use HasFactory;

    protected $table = 'group_permision';
    public $timestamps = true;
    
    public function group()
    {
        return $this->belongsTo(Groups::class);
    }
    public function role()
    {
        return $this->belongsTo(Roles::class);
    }
}
