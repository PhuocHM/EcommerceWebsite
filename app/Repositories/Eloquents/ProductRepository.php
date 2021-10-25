<?php

namespace App\Repositories\Eloquents;

use App\Models\Admin\Product;
use App\Repositories\Interfaces\ProductInterface;
use Carbon\Carbon;

class ProductRepository implements ProductInterface
{
    public function getAll()
    {
        return Product::all();
    }
    public function getOne()
    {
    }
    public function store($request)
    {
        $product = new Product();
        $product->code        = $request->code;
        $product->name        = $request->name;
        $product->slug        = $request->slug;
        $product->category_id = $request->category_id;
        $product->brand_id    = $request->brand_id;
        $product->sold        = $request->sold;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->status      = $request->status;
        $product->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $product->save();
    }
    public function update($request, $id)
    {
        $product = Product::find($id);
        $product->code        = $request->code;
        $product->name        = $request->name;
        $product->slug        = $request->slug;
        $product->category_id = $request->category_id;
        $product->brand_id    = $request->brand_id;
        $product->sold        = $request->sold;
        $product->price       = $request->price;
        $product->description = $request->description;
        $product->status      = $request->status;
        $product->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $product->save();
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete(); 
    }
    public function search()
    {
    }
    public function findByCategory($category_id)
    {
        return Product::where('category_id')->get();
    }
    public function findByBrand($brand_id)
    {
        return Product::where('brand_id')->get();
    }
}
