<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'slug', 'mail', 'password', 'birthday', 'address', 'identification', 'image', 'group_id'
    ];
    protected $table = 'employees';
    public $timestamps = true;

    public function group()
    {
        return $this->belongsTo(Groups::class, 'group_id', 'id');
    }
}
