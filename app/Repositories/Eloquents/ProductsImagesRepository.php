<?php

namespace App\Repositories\Eloquents;

use App\Models\Admin\Products;
use App\Models\Admin\ProductImages;
use App\Repositories\Interfaces\ProductImagesInterface;
use Carbon\Carbon;

class ProductImagesRepository implements ProductImagesInterface
{

    public function getAll()
    {
        return ProductImages::with('product')->orderBy('id','DESC')->get();
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

    public function search()
    {
        $search = $_GET['tukhoa'];
        $products =Products::with('brand','category')->where('name','LIKE','%'.$search.'%')->get();
        return $products;
    }
}
