<?php 

namespace App\Repositories\Eloquents;

use App\Models\Admin\Brand;
use App\Repositories\Interfaces\BrandInterface;
use Carbon\Carbon;
class BrandRepository implements BrandInterface {

    public function getAll(){

        return Brand::all();
    }
    public function getOne(){

    }
    public function store( $request){
        $brand = new Brand();
        $brand->name    = $request->name;
        $brand->slug    = $request->slug;

        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'images/brand/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $brand->image = $new_image;
            $data['brand_image'] = $new_image;
        }
      
        $brand->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $brand->save();
    }
    public function update($request, $id){
        $brand = Brand::find($id);
        $brand->name  = $request->name;
        $brand->slug    = $request->slug;
        $brand->description = $request->description;
        $brand->parent_id  = $request->parent_id;
        $brand->status  =$request->status;

        $brand->save();  
        
    }
    public function destroy(){

    }
    public function search(){

    }
    
}