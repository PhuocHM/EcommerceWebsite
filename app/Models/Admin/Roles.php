<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    public $timestamps = true;

    public function group()
    {
        return $this->belongsToMany(Groups::class,'group_permision','group_id','role_id');
    }
    
}
