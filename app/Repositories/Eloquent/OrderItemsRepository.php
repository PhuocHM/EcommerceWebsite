<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Customers;
use App\Models\Admin\OrderItems;
use App\Models\Admin\Orders;
use App\Models\Admin\Products;
use App\Repositories\Interfaces\OrderItemsInterface;
use Carbon\Carbon;

class OrderItemsRepository implements OrderItemsInterface
{
    public function getAll($request)
    {
        $query = OrderItems::orderBy('id', 'DESC');
        if ($request->orderItem) {
            $search = $request->orderItem;

            $query->where('product_id', 'LIKE', '%' . $search . '%');
        }
        $query->orderBy('id', 'DESC');
        return $query->paginate(5);
    }
    public function store($request)
    {
        $orderItem              = new OrderItems();
        $orderItem->product_id  = $request->product_id;
        $orderItem->price       = $request->price;
        $orderItem->quantity    = $request->quantity;
        $orderItem->order_id    = $request->order_id;
        $orderItem->save();

        $order = Orders::find($request->order_id);
        $order->total_price = $order->total_price + $request->price * $request->quantity;
        $order->save();
    }

    public function update($request, $id)
    {
        $orderItem              = OrderItems::find($id);
        $orderItem->product_id  = $request->product_id;
        $orderItem->price       = $request->price;
        $orderItem->quantity    = $request->quantity;
        $orderItem->updated_at  = Carbon::now('Asia/Ho_Chi_Minh');

        $orderItem->save();
    }
    public function find($id)
    {
        return OrderItems::find($id);
    }
    public function destroy($id)
    {

        $orderItem = OrderItems::find($id);
        $orderItem->delete();
    }

    public function findbyProduct()
    {
        return Products::orderBy('id', 'DESC')->get();
    }
}
