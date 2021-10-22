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
        $brand->description  = $request->description;
        $brand->parent_id  = $request->parent_id;
        $brand->status  =$request->status;
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