<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Brand;
use App\Models\Admin\Products;
use App\Models\Admin\Category;
use App\Repositories\Interfaces\ProductsInterface;
use Carbon\Carbon;

class ProductsRepository implements ProductsInterface
{

    public function getAll()
    {
        return Products::with('category','brand')->orderBy('id','DESC')->get();
    }
    public function getOne()
    {
    }
    public function store($request)
    {
        $product                 = new Products();
        $product->name           = $request->name;
        $product->code           = $request->code;
        $product->slug           = $request->slug;
        $product->sold           = $request->sold;
        $product->price          = $request->price;
        $product->description    = $request->description;
        $product->status         = $request->status;
        $product->brand_id	     = $request->brand_id;
        $product->category_id    = $request->category_id;
        $product->created_at     = Carbon::now('Asia/Ho_Chi_Minh');

        $product->save();
    }
    public function update($request, $id)
    {
        $product                 = Products::find($id);
        $product->name           = $request->name;
        $product->slug           = $request->slug;
        $product->sold           = $request->sold;
        $product->price          = $request->price;
        $product->description    = $request->description;
        $product->status         = $request->status;
        $product->brand_id	     = $request->brand_id	;
        $product->category_id    = $request->category_id;  
        $product->code           = $request->code;  
        $product->updated_at     = Carbon::now('Asia/Ho_Chi_Minh');

        $product->save();
    }
    public function edit($id){
        return Products::find($id);
     }
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
    }
   
    public function create_category()
    {
        return Category::orderBy('id','DESC')->get();
    }
    public function create_brand()
    {
        return Brand::orderBy('id','DESC')->get();
    }
    public function search()
    {
        $search = $_GET['tukhoa'];
        $products =Products::with('brand','category')->where('name','LIKE','%'.$search.'%')->get();
        return $products;
    }
}
