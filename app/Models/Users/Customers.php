<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'slug',
        'phone',
        'address',
        'user_id',
    ];

    public function order()
    {
        return $this->hasMany(Orders::class);
    }

    public function user()
    {
        return $this->belongsTo(Customers::class);
    }
}
