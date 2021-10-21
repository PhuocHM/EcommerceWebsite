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
    public function store( $request){
        $category = new Category();
        $category->name    = $request->name;
        $category->slug    = $request->slug;
        $category->description  = $request->description;
        $category->parent_id  = $request->parent_id;
        $category->status  =$request->status;
    
        $category->save();
    }
    public function update($request, $id){
        
    }
    public function destroy(){

    }
    public function search(){

    }
    
}