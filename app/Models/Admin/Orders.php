<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'groups';
    public $timestamps = true;

    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
