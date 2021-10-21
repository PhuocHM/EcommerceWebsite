<?php 

namespace App\Repositories\Eloquents;

use App\Models\Category;

class CategoryRepository {

    public function all()
    {
        return Category::all();
    }
}