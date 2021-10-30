<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\ProductAttributes;
use App\Models\Admin\Products;
use App\Models\Admin\Attributes;
use App\Repositories\Interfaces\ProductAttributesInterface;
use Carbon\Carbon;

class ProductAttributesRepository implements ProductAttributesInterface
{
    public function getAll($request)
    {
        $query = ProductAttributes::with('product', 'attribute');
        if ($request->productAttribute) {
            $search = $request->productAttribute;
            
            $query->where('product_id', 'LIKE', '%' . $search . '%')->orWhere('attribute_id', 'LIKE', '%' . $search . '%') ;
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(10);
    }
    public function create_product()
    {
        return Products::orderBy('id', 'DESC')->get();
    }
    public function create_attribute()
    {
        return Attributes::orderBy('id', 'DESC')->get();
    }
    public function store($request)
    {
        $productAttribute                = new ProductAttributes();
        $productAttribute->product_id    = $request->product_id;
        $productAttribute->attribute_id  = $request->attribute_id;
        $productAttribute->content       = $request->content;
        $productAttribute->created_at    = Carbon::now('Asia/Ho_Chi_Minh');

        $productAttribute->save();
    }
    public function edit($id)
    {
        return ProductAttributes::find($id);
    }
    public function update($request, $id)
    {
        $productAttribute                = ProductAttributes::find($id);
        $productAttribute->product_id    = $request->product_id;
        $productAttribute->attribute_id  = $request->attribute_id;
        $productAttribute->content       = $request->content;
        $productAttribute->updated_at    = Carbon::now('Asia/Ho_Chi_Minh');

        $productAttribute->save();
    }
    public function destroy($id)
    {
        $productAttribute = ProductAttributes::find($id);
        return $productAttribute->delete();
    }
   
}
