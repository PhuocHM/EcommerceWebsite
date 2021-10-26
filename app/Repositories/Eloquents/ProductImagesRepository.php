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
        return ProductImages::with('product')->orderBy('id', 'DESC')->get();
    }
    public function create_product()
    {
        return Products::orderBy('id', 'DESC')->get();
    }
    public function store($request)
    {
        $productImage             = new ProductImages();
        $productImage->product_id = $request->product_id;
        $productImage->type    = $request->type;

        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'images/product/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $productImage->image = $new_image;
            $data['productImage_image'] = $new_image;
        }
        $productImage->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $productImage->save();
    }
    public function edit($id)
    {
        return ProductImages::find($id);
    }
    public function update($request, $id)
    {
        $productImage              = ProductImages::find($id);
        $productImage->product_id  = $request->product_id;
        $productImage->type        = $request->type;

        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            if ($get_image) {
                $path = 'images/brand/' . $productImage->image;
                if (file_exists($path)) {
                    unlink($path);
                }
                $path = 'images/brand/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
                $productImage->image = $new_image;
                $data['productImage_image'] = $new_image;
            }
        }
        $productImage->updated_at  = Carbon::now('Asia/Ho_Chi_Minh');

        $productImage->save();
    }
    public function destroy($id)
    {
        $productImage = ProductImages::find($id);
        $path = 'images/product/' . $productImage->image;
        if (file_exists($path)) {
            unlink($path);
        }
        $productImage->delete();
    }

    public function search()
    {
        $search = $_GET['tukhoa'];
        $productImages = ProductImages::with('brand', 'category')->where('name', 'LIKE', '%' . $search . '%')->get();
        return $productImages;
    }
}
