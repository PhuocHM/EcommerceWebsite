<?php 

namespace App\Repositories\Eloquents;

use App\Models\Category;
use App\Repositories\Interfaces\CategoryInterface;

class CategoryRepository implements CategoryInterface {

    public function getAll(){

        return Category::all();
    }
    public function getOne(){

    }
    public function store(){

    }
    public function update($request, $id){
        
    }
    public function destroy(){

    }
    public function search(){

    }
    
}