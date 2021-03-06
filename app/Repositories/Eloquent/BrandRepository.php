<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Brand;
use App\Repositories\Interfaces\BrandInterface;
use Carbon\Carbon;

class BrandRepository implements BrandInterface
{

    public function getAll($request)
    {
        $query = Brand::orderBy('id', 'DESC');
        if ($request->brand) {
            $search = $request->brand;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        return $query->paginate(5);
        // return Brand::all();
    }
    public function store($request)
    {

        $brand = new Brand();
        $brand->name    = $request->name;
        $brand->slug    = $request->slug;

        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'images/brand/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $path . $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $brand->image = $new_image;
            $data['brand_image'] = $new_image;
        }

        $brand->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $brand->save();
    }
    public function update($request, $id)
    {
        $brand = Brand::find($id);
        $brand->name  = $request->name;
        $brand->slug    = $request->slug;
        $path = 'images/brand/';
        $get_image = $request->file('image');
        if ($get_image) {
            $path = 'images/brand/' . $brand->image;
            if (file_exists($path)) {
                unlink($path);
            }
            $path = 'images/brand/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $path . $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $brand->image = $new_image;
            $data['brand_image'] = $new_image;
        }

        $brand->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $brand->save();
    }
    public function edit($id)
    {
        return Brand::find($id);
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $path = 'images/brand/' . $brand->image;
        if (file_exists($path)) {
            unlink($path);
        }
        $brand->delete();
    }
}
