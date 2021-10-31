<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Coupons;

use App\Repositories\Interfaces\CouponRepositoryInterface;


class CouponsRepository implements CouponRepositoryInterface
{
    public function getAll($request)
    {
        $query = Coupons::orderBy('id', 'DESC');

        if ($request->coupon) {
            $search = $request->coupon;
            $query->where('code', 'LIKE', '%' . $search . '%')->orWhere('amounts', 'LIKE', '%' . $search . '%');
        }
        return $query->paginate(5);
    }

    public function find($id)
    {
        return Coupons::find($id);
    }

    public function store($request)
    {
        $data = $request->only('amounts', 'expired_day', 'description');
        $data['code'] = '#CP' . time() . 'GG';
        $file = $request->image;
        $path = "images/coupons/";
        if (!$request->hasFile('image')) {
            $data['image'] = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName =  $path . time();
            $newFileName = "$fileName.$fileExtension";
            $request->file('image')->move(public_path('images/coupons'), $newFileName);
            $data['image'] = $newFileName;
        }

        Coupons::create($data);
    }

    public function update($request, $id)
    {
        $data = $request->only('amounts', 'expired_day', 'description');
        $file = $request->image;
        $path = "images/coupons/";
        if (!$request->hasFile('image')) {
            $data['image'] = $file;
        } else {
            $fileExtension = $file->getClientOriginalExtension();
            $fileName =  $path . time();
            $newFileName = "$fileName.$fileExtension";
            $request->file('image')->move(public_path('images/coupons'), $newFileName);
            $data['image'] = $newFileName;
        }

        Coupons::find($id)->update($data);
    }

    public function destroy($id)
    {
        Coupons::find($id)->delete();
    }
}
