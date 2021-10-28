<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderItemsRequest;
use App\Services\OrderItemsService;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
{
    private $orderItemsService;
    public function __construct(OrderItemsService $orderItemsService)
    {
        $this->orderItemsService = $orderItemsService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orderItems = $this->orderItemsService->getAll($request);
        $params = [
            'orderItems' => $orderItems,
        ];
        return view('admin.orderItems.index', $params);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customers = $this->orderItemsService->findbyCustomer();
        $orderItem = $this->orderItemsService->find($id);
        $params = [
            'customers' => $customers,
            'orderItem'     => $orderItem
        ];
        return view('admin.orderitems.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderItemsRequest $request, $id)
    {

        $this->orderItemsService->update($request, $id);
        return redirect()->route('orderItems.index')->with('status', 'Cập nhật đơn hàng thành công!');
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
            $this->orderItemsService->destroy($id);
            return redirect()->route('orderItems.index')->with('status', 'Xóa đơn hàng thành công !');
        } catch (\Exception $e) {
            return redirect()->route('orderItems.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
