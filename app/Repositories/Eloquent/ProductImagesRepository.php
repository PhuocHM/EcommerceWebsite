<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Products;
use App\Models\Admin\ProductImages;
use App\Repositories\Interfaces\ProductImagesInterface;
use Carbon\Carbon;

class ProductImagesRepository implements ProductImagesInterface
{
    public function getAll($request)
    {
        $query = ProductImages::with('product');
        if ($request->productImages) {
            $search = $request->productImages;
            $products_id = Products::where('name', 'LIKE', '%' . $search . '%')->pluck('id')->toArray();
            $query->whereIn('product_id',$products_id);
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(5);
    }
    public function create_product()
    {
        return Products::orderBy('id', 'DESC')->get();
    }
    public function store($request)
    {
        if ($request->hasFile('image')) {
            foreach ($request->image as $key => $value) {
                $productImage             = new ProductImages();
                $productImage->product_id = $request->product_id;
                $productImage->type       = $request->type;
                $get_image = $value;
                $path = 'images/product/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
                $productImage->image = $new_image;
                $data['productImage_image'] = $new_image;
                $productImage->save();
            }
        }
    }
    public function edit($id)
    {
        return ProductImages::find($id);
    }
    public function update($request, $id)
    {
        $productImage             = ProductImages::find($id);
        $productImage->product_id = $request->product_id;
        $productImage->type       = $request->type;

        $file = $request->image;
        if (!$request->hasFile('image')) {
            $productImage->image = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = time() + 2;
            $newFileName = "$fileName.$fileExtension";
            $request->file('image')->move(public_path('images/product'), $newFileName);
            $productImage->image = $newFileName;
        }
        $productImage->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

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
}
