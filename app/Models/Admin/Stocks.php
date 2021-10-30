<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'product_id', 'employee_id', 'quantity', 'cost_price', 'supplier_id',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Suppliers::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }
}
