<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersRequest;
use App\Services\OrdersService;
use Illuminate\Http\Request;
use App\Models\Admin\Orders;

class OrdersController extends Controller
{
    private $ordersService;
    public function __construct(OrdersService $ordersService)
    {
        $this->ordersService = $ordersService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = $this->ordersService->getAll($request);
        $params = [
            'orders' => $orders,
        ];
        return view('admin.orders.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = $this->ordersService->findbyCustomer();
        $params = [
            'customers' => $customers,
        ];
        return view('admin.orders.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdersRequest $request)
    {
        $this->ordersService->store($request);
        return redirect()->route('orders.index')->with('status', 'Thêm đơn hàng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderItems  = $this->ordersService->orderItem($id);
        $order_id = $id;

        $params = [
            'orderItems' => $orderItems,
            'order_id' => $order_id
        ];
        return view('admin.orders.show', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = $this->ordersService->findbyCustomer();
        $order = $this->ordersService->find($id);
        $params = [
            'customers' => $customers,
            'order'     => $order
        ];
        return view('admin.orders.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrdersRequest $request, $id)
    {

        $this->ordersService->update($request, $id);
        return redirect()->route('orders.index')->with('status', 'Cập nhật đơn hàng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->ordersService->destroy($id);
            return redirect()->route('orders.index')->with('status', 'Xóa đơn hàng thành công !');
        } catch (\Exception $e) {
            return redirect()->route('orders.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
    public function status(Request $request)
    {
        $data = $request->all();
        $order = Orders::find($request->order_id);
        $order->status = $request->status;
        $order->save();
    }
}
