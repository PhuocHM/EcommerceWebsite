<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'id', 'name', 'slug', 'mail', 'password', 'birthday', 'address', 'identification', 'image', 'group_id'
    ];

    public function stock()
    {
        return $this->hasMany(Stocks::class, 'employee_id');
    }

    public $timestamps = true;

    public function group()
    {
        return $this->belongsTo(Groups::class, 'group_id', 'id');
    }
}
