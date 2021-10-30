<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Models\Admin\Customers;
use App\Repositories\Interfaces\CustomersInterface;

use Carbon\Carbon;

class CustomersRepository implements CustomersInterface
{

    public function getAll($request)
    {
        $query = Customers::with('user');
        if ($request->customer) {
            $search = $request->customer;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');

        return $query->paginate(3);
    }
    public function getOne()
    {
    }
    public function store($request)
    {
        $customer                = new Customers();
        $customer->name           = $request->name;
        $customer->slug           = $request->slug;
        $customer->phone           = $request->phone;
        $customer->address          = $request->address;
        $customer->bonus_points    = $request->bonus_points;
        $customer->user_id          = $request->user_id;
        $customer->created_at     = Carbon::now('Asia/Ho_Chi_Minh');

        $customer->save();
    }
    public function update($request, $id)
    {
        $customer                 = Customers::find($id);
        $customer->name           = $request->name;
        $customer->slug           = $request->slug;
        $customer->phone           = $request->phone;
        $customer->address          = $request->address;
        $customer->bonus_points    = $request->bonus_points;
        $customer->user_id          = $request->user_id;
        $customer->updated_at     = Carbon::now('Asia/Ho_Chi_Minh');

        $customer->save();
    }
    public function edit($id)
    {
        return Customers::find($id);
    }
    public function destroy($id)
    {
        $customers = Customers::find($id);
        $customers->delete();
    }

    public function create_user()
    {
        return User::orderBy('id', 'DESC')->get();
    }
    public function create()
    {
        return User::orderBy('id', 'DESC')->get();
    }
}
