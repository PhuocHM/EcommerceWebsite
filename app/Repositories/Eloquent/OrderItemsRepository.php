<?php

namespace App\Repositories\Eloquent;

use App\Models\Admin\Customers;
use App\Models\Admin\OrderItems;
use App\Models\Admin\Products;
use App\Repositories\Interfaces\OrderItemsInterface;
use Carbon\Carbon;

class OrderItemsRepository implements OrderItemsInterface
{
    public function getAll($request)
    {
        $query = OrderItems::orderItemBy('id', 'DESC');
        if ($request->orderItem) {
            $search = $request->orderItem;

            $query->where('name', 'LIKE', '%' . $search . '%');
        }
        $query->orderItemBy('id', 'DESC');
        return $query->paginate(2);
    }
    
    public function update($request, $id)
    {
        $orderItem                  = OrderItems::find($id);
        $orderItem->code            = $request->code;
        $orderItem->customer_id     = $request->customer_id;
        $orderItem->payment_method  = $request->payment_method;
        $orderItem->total_price     = $request->total_price;
        $orderItem->status          = $request->status;
        
        $orderItem->updated_at      = Carbon::now('Asia/Ho_Chi_Minh');

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
    public function findbyCustomer()
    {
        return Customers::orderBy('id', 'DESC')->get();
    }
    public function findbyProduct()
    {
        return Products::orderBy('id', 'DESC')->get();
    }
}
