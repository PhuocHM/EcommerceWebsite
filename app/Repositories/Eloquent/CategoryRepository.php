<?php 

namespace App\Repositories\Eloquent;

use App\Models\Admin\Category;
use App\Repositories\Interfaces\CategoryInterface;
use Carbon\Carbon;
class CategoryRepository implements CategoryInterface {

    public function getAll()
    {
        return Category::all();
    }
    public function store( $request)
    {
        $category = new Category();
        $category->name    = $request->name;
        $category->slug    = $request->slug;
        $category->description  = $request->description;
        $category->parent_id  = $request->parent_id;
        $category->status  =$request->status;
        $category->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $category->save();
    }
    public function update($request, $id)
    {
        $category = Category::find($id);
        $category->name  = $request->name;
        $category->slug    = $request->slug;
        $category->description = $request->description;
        $category->parent_id  = $request->parent_id;
        $category->status  =$request->status;

        $category->save();  
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
    
    public function categories_arr()
    {
     $categories= Category::all();
     $categories_arr = $categories->pluck('name','id')->toArray();
      return  $categories_arr = ['Danh mục cha'] + $categories_arr;
       
    }
    public function create()
    {
        return Category::orderBy('id','DESC')->get();
    }
    public function edit($id)
    {
        return Category::find($id);
    }
}