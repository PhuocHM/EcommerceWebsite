<?php 

namespace App\Repositories\Eloquents;

use App\Models\Admin\Product;
use App\Repositories\Interfaces\ProductInterface;
use Carbon\Carbon;
class ProductRepository implements ProductInterface {

    public function getAll(){

        return Product::all();
    }
    public function getOne(){

    }
    public function store( $request){
        $product = new Product();
        $product->name    = $request->name;
        $product->slug    = $request->slug;
        $product->description  = $request->description;
        $product->parent_id  = $request->parent_id;
        $product->status  =$request->status;
        $product->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        $product->save();
    }
    public function update($request, $id){
        $product = Product::find($id);
        $product->name  = $request->name;
        $product->slug    = $request->slug;
        $product->description = $request->description;
        $product->parent_id  = $request->parent_id;
        $product->status  =$request->status;

        $product->save();  
        
    }
    public function destroy(){

    }
    public function search(){

    }
    
}