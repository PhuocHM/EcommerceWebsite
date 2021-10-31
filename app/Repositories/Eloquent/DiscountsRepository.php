<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Discounts;
use App\Models\Admin\DiscountProduct;
use App\Repositories\Interfaces\DiscountsInterface;
use Carbon\Carbon;

class DiscountsRepository implements DiscountsInterface
{

    public function getAll($request)
    {
        $query = Discounts::orderBy('id','DESC');
        if($request->discount){
            $search=$request->discount;          
            $query->where('name','LIKE','%'.$search.'%')->orWhere('amounts', 'LIKE', '%' . $search . '%')->orWhere('start_date','LIKE', '%' . $search . '%')->orWhere('expired_date','LIKE', '%' . $search . '%');
        }

        return $query->paginate(5);
    }
    public function getOne()
    {
    }
    public function store($request)
    {

        $discount                    = new Discounts();
        $discount->name              = $request->name;
        $discount->amounts           = $request->amounts;
        $discount->start_date         = $request->start_date;
        $discount->expired_date       = $request->expired_date;
        $discount->description       = $request->description;

        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            $path = 'images/discount/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $path . $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $discount->image = $new_image;
            $data['discount_image'] = $new_image;
        }

        $discount->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $discount->save();
    }
    public function update($request, $id)
    {
        $discount = Discounts::find($id);
        $discount->name           = $request->name;
        $discount->amounts  = $request->amounts;
        $discount->start_date    = $request->start_date;
        $discount->expired_date    = $request->expired_date;
        $discount->description    = $request->description;
        if ($request->hasFile('image')) {
            $get_image = $request->file('image');
            if ($get_image) {
                $path = 'images/discount/' . $discount->image;
                if (file_exists($path)) {
                    unlink($path);
                }
                $path = 'images/discount/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $path . $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
                $discount->image = $new_image;
                $data['discount_image'] = $new_image;
            }
        }
        $discount->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $discount->save();
    }
    public function edit($id)
    {
        return Discounts::find($id);
    }
    public function destroy($id)
    {
        $discount = Discounts::find($id);
        $path = 'images/discount/' . $discount->image;
        if (file_exists($path)) {
            unlink($path);
        }
        $discountProduct = DiscountProduct::where('discount_id', $id);
        $discountProduct->delete();
        $discount->delete();
    }
    public function create_discount()
    {
        return Discounts::orderBy('id', 'DESC')->get();
    }
}
