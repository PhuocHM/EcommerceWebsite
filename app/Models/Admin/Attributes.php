<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Attributes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        // your other new column
    ];
    protected $fillable = [
        'name', 'slug', 'category_id'
    ];
    protected $primaryKey = 'id';
    protected $table = 'attributes';
    public $timestamps = true;

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
