<?php 

namespace App\Repositories\Eloquents;

use App\Models\Admin\Category;
use App\Repositories\Interfaces\CategoryInterface;
use Carbon\Carbon;
class CategoryRepository implements CategoryInterface {

    public function getAll(){

        return Category::paginate(1);
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
        $category->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $category->save();
    }
    public function update($request, $id){
        $category = Category::find($id);
        $category->name  = $request->name;
        $category->slug    = $request->slug;
        $category->description = $request->description;
        $category->parent_id  = $request->parent_id;
        $category->status  =$request->status;

        $category->save();  
        
    }
    public function destroy(){

    }
    public function search(){

    }
    
}