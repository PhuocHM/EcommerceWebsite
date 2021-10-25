<?php 

namespace App\Repositories\Eloquents;

use App\Models\Admin\ProductAttributes;
use App\Models\Admin\Products;
use App\Models\Admin\Attributes;
use App\Repositories\Interfaces\ProductAttributesInterface;
use Carbon\Carbon;
class ProductAttributesRepository implements ProductAttributesInterface 
{
    public function getAll()
    {
        return ProductAttributes::with('product','attribute')->orderBy('id','DESC')->get();
    }
    public function create_product()
    {
        return Products::orderBy('id','DESC')->get();
    }
    public function create_attribute()
    {
        return Attributes::orderBy('id','DESC')->get();
    }
    public function store( $request){
        $productAttribute                = new ProductAttributes();
        $productAttribute->product_id    = $request->product_id;
        $productAttribute->attribute_id  = $request->attribute_id;
        $productAttribute->content       = $request->content;
        $productAttribute->created_at    = Carbon::now('Asia/Ho_Chi_Minh');
    
        $productAttribute->save();
    }
    public function edit($id){
        return ProductAttributes::find($id);
    }
    public function update($request, $id){
        $productAttribute                = ProductAttributes::find($id);
        $productAttribute->product_id    = $request->product_id;
        $productAttribute->attribute_id  = $request->attribute_id;
        $productAttribute->content       = $request->content;
        $productAttribute->updated_at    = Carbon::now('Asia/Ho_Chi_Minh');

        $productAttribute->save();  
        
    }
    public function destroy($id){
        $productAttribute = ProductAttributes::find($id);
        return $productAttribute->delete();
    }
    public function search()
    {
    }

}