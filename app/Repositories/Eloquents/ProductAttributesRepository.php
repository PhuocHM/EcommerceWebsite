<?php 

namespace App\Repositories\Eloquents;

use App\Models\Admin\ProductAttributes;

use App\Repositories\Interfaces\ProductAttributesInterface;
use Carbon\Carbon;
class ProductAttributesRepository implements ProductAttributesInterface 
{
    public function getAll()
    {
        return ProductAttributes::with('products','attributes')->orderBy('id','DESC')->get();
    }
    public function getOne()
    {

    }
    public function store( $request){
        // $attributes = new ProductAttributes();
        // $attributes->name    = $request->name;
        // $attributes->slug    = $request->slug;
        // $attributes->category_id  = $request->category_id;
        // $attributes->created_at = Carbon::now('Asia/Ho_Chi_Minh');
    
        // $attributes->save();
    }
    public function update($request, $id){
        // $attributes = ProductAttributes::find($id);
        // $attributes->name  = $request->name;
        // $attributes->slug    = $request->slug;
        // $attributes->category_id = $request->category_id;
        // $attributes->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        // $attributes->save();  
        
    }
    public function search(){

    }
    public function create(){
        // return Product::orderBy('id','DESC')->get();
    }
    public function edit($id){
    //    return ProductAttributes::find($id);
    }
    public function destroy($id){
        // $attribute= ProductAttributes::find($id);
        // return $attribute->delete();
   }
  
}