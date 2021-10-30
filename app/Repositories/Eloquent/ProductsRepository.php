<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Brand;
use App\Models\Admin\Products;
use App\Models\Admin\Category;
use App\Models\Users\ProductImage;
use App\Repositories\Interfaces\ProductsInterface;

use Carbon\Carbon;

class ProductsRepository implements ProductsInterface
{

    public function getAll($request)
    {
        $query = Products::with('category', 'brand');
        if ($request->product) {
            $search = $request->product;

            $query->where('name', 'LIKE', '%' . $search . '%')->orWhere('', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(5);
    }

    public function store($request)
    {
        $product                 = new Products();
        $product->name           = $request->name;
        $product->code           = '#ECMW' . time();
        $product->slug           = $request->slug;
        $product->price          = $request->price;
        $product->description    = $request->description;
        $product->status         = $request->status;
        $product->brand_id       = $request->brand_id;
        $product->category_id    = $request->category_id;
        $product->created_at     = Carbon::now('Asia/Ho_Chi_Minh');

        $product->save();
    }
    public function update($request, $id)
    {
        $product                 = Products::find($id);
        $product->name           = $request->name;
        $product->slug           = $request->slug;
        $product->price          = $request->price;
        $product->description    = $request->description;
        $product->status         = $request->status;
        $product->brand_id       = $request->brand_id;
        $product->category_id    = $request->category_id;
        $product->updated_at     = Carbon::now('Asia/Ho_Chi_Minh');

        $product->save();
    }
    public function edit($id)
    {
        return Products::find($id);
    }
    public function destroy($id)
    {
        $product = Products::find($id);
        $product_image = ProductImage::where('product_id', $id)->get();
        $product_image->delete();
        $product->delete();
    }

    public function create_category()
    {
        return Category::orderBy('id', 'DESC')->get();
    }
    public function create_brand()
    {
        return Brand::orderBy('id', 'DESC')->get();
    }
}
