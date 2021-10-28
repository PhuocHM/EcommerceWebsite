<?php 

namespace App\Repositories\Eloquent;

use App\Models\Admin\DiscountProduct;
use App\Models\Admin\Products;
use App\Models\Admin\Discounts;
use App\Repositories\Interfaces\DiscountProductInterface;
use Carbon\Carbon;
class DiscountProductRepository implements DiscountProductInterface 
{
    public function getAll($request)
    {
         // return Attributes::with('category')->orderBy('id','DESC')->get();
         $query = DiscountProduct::orderBy('id','DESC');
         if($request->discountProduct){
             $search=$request->discountProduct;
         
             $query->where('product_id','LIKE','%'.$search.'%');
         }
 
         return $query->paginate(2);
 
    }
    public function create_product()
    {
        return Products::orderBy('id','DESC')->get();
    }
    public function create_discount()
    {
        return Discounts::orderBy('id','DESC')->get();
    }
    public function store( $request){
        $discountProduct                = new DiscountProduct();
        $discountProduct->product_id    = $request->product_id;
        $discountProduct->discount_id    = $request->discount_id;
        $discountProduct->created_at    = Carbon::now('Asia/Ho_Chi_Minh');
    
        $discountProduct->save();
    }
    public function edit($id){
        return discountProduct::find($id);
    }
    public function update($request, $id){
        $discountProduct                = DiscountProduct::find($id);
        $discountProduct->product_id    = $request->product_id;
        $discountProduct->discount_id  = $request->discount_id;
    
        $discountProduct->updated_at    = Carbon::now('Asia/Ho_Chi_Minh');

        $discountProduct->save();  
        
    }
    public function destroy($id){
        $discountProduct = DiscountProduct::find($id);
        return $discountProduct->delete();
    }
    public function search()
    {
    }

}