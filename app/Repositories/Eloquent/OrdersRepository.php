<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Customers;
use App\Models\Admin\OrderItems;
use App\Models\Admin\Orders;
use App\Models\Admin\Products;
use App\Repositories\Interfaces\OrdersInterface;
use Carbon\Carbon;

class OrdersRepository implements OrdersInterface
{
    public function getAll($request)
    {
        $query = Orders::orderBy('id', 'DESC');
        if ($request->order) {
            $search = $request->order;
            $customers_id = Customers::where('name', 'LIKE', '%' . $search . '%')->pluck('id')->toArray();
            $query->whereIn('customer_id', $customers_id)->orWhere('code', 'LIKE', '%' . $search . '%')->orWhere('payment_method', 'LIKE', '%' . $search . '%')->orWhere('total_price', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(5);
    }
    public function store($request)
    {
        $order                  = new Orders();
        $order->code            = '#ORDEW' . time();
        $order->customer_id     = $request->customer_id;
        $order->payment_method  = $request->payment_method;
        $order->total_price     = $request->total_price;
        $order->status          = $request->status;
        $order->created_at      = Carbon::now('Asia/Ho_Chi_Minh');

        $order->save();
    }

    public function update($request, $id)
    {
        $order                  = Orders::find($id);
        $order->code            = '#ORDEW' . time();
        $order->customer_id     = $request->customer_id;
        $order->payment_method  = $request->payment_method;
        $order->total_price     = $request->total_price;
        $order->status          = $request->status;
        $order->updated_at      = Carbon::now('Asia/Ho_Chi_Minh');
       

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
    public function findbyCustomer()
    {
        return Customers::orderBy('id', 'DESC')->get();
    }
    public function findbyItem()
    {
        return OrderItems::orderBy('id', 'DESC')->get();
    }
    public function orderItem($id)
    {
        return OrderItems::with('product')->where('order_id', $id)->get();
    }
}
