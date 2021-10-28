<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersRequest;
use App\Services\OrdersService;
use Illuminate\Http\Request;

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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
       
        $params = [
            'orderItems ' => $orderItems ,      
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
}