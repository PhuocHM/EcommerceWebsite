<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Category;
use App\Repositories\Interfaces\CategoryInterface;
use Carbon\Carbon;

class CategoryRepository implements CategoryInterface
{

    public function getAll($request)
    {
        $query = Category::orderBy('id', 'DESC');
        if ($request->category) {
            $search = $request->category;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        return $query->paginate(5);
    }
    public function store($request)
    {
        $category = new Category();
        $category->name    = $request->name;
        $category->slug    = $request->slug;
        $category->description  = $request->description;
        $category->parent_id  = $request->parent_id;
        $category->status  = $request->status;
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
        $category->status  = $request->status;

        $category->save();
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
    }

    public function categories_arr()
    {
        $categories = Category::all();
        $categories_arr = $categories->pluck('name', 'id')->toArray();
        return  $categories_arr = ['Danh mục cha'] + $categories_arr;
    }
    public function create()
    {
        return Category::orderBy('id', 'DESC')->get();
    }
    public function edit($id)
    {
        return Category::find($id);
    }
    public function create_category()
    {
        return Category::orderBy('id', 'DESC')->get();
    }
    public function seach($type, $content)
    {
        switch ($type) {
            case 0:
                $items = Category::where('name', 'LIKE', '%' . $content . '%')->paginate(5);
                break;
            case 1:
                $items = Category::where('name', 'LIKE', '%' . $content . '%')->where('parent_id', '>', 0)->paginate(5);
                break;
            case 2:
                $items = Category::where('name', 'LIKE', '%' . $content . '%')->where('parent_id', 0)->paginate(5);
                break;
        }
        return $items;
    }
}
