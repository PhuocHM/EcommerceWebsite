<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    protected $table = 'groups';
    public $timestamps = true;

    public function employee()
    {
        return $this->hasMany(Employees::class);
    }
    public function role()
    {
        return $this->belongsToMany(Roles::class, 'group_permision', 'group_id', 'role_id');
    }
}
