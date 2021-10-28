<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Orders;
use App\Repositories\Interfaces\OrdersInterface;
use Carbon\Carbon;

class OrdersRepository implements OrdersInterface
{
    public function getAll($request)
    {
        $query = Orders::orderBy('id', 'DESC');
        if ($request->order) {
            $search = $request->order;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(2);
    }
    public function store($request)
    {
        $order = new Orders();
        $order->name       = $request->name;
        $order->slug      = $request->slug;
        $order->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $order->save();
    }
    public function update($request, $id)
    {
        $order             = Orders::find($id);
        $order->name       = $request->name;
        $order->slug      = $request->slug;
        $order->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $order->save();
    }
    public function find($id)
    {
        return Orders::find($id);
    }
    public function destroy($id)
    {
        $order = Orders::find($id);
        $order->delete();
    }
   
}
