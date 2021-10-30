<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderItemsRequest;
use App\Models\Admin\Products;
use App\Services\OrderItemsService;
use App\Services\ProductsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderItemsController extends Controller
{
    private $orderItemsService;
    private $productsService;
    public function __construct(OrderItemsService $orderItemsService, ProductsService $productsService)
    {
        $this->orderItemsService = $orderItemsService;
        $this->productsService = $productsService;
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
    public function createItem($id)
    {
        $products = $this->orderItemsService->findbyProduct();
        $order_id = $id;

        $params = [
            'products' => $products,
            'order_id' => $order_id,
        ];
        return view('admin.orders.create-orderItems', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderItemsRequest $request)
    {

        $order_id = $request->order_id;
        $this->orderItemsService->store($request);
        return redirect()->route('orders.show', $order_id)->with('status', 'Thêm chi tiết đơn hàng thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function ajaxFindProduct(Request $request)
    {
        $product_info = $this->productsService->getOne($request->product_id);
        return response()->json(['success' => $product_info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = $this->orderItemsService->findbyProduct();
        $orderItem = $this->orderItemsService->find($id);
        $params = [
            'products'  => $products,
            'orderItem' => $orderItem
        ];
        return view('admin.orders.edit-orderItems', $params);
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
        $order = $this->orderItemsService->find($id);
        return redirect()->route('orders.show', $order->order_id)->with('status', 'Cập nhật chi tiết đơn hàng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Log::info($id,$request->all());
        try {
            $this->orderItemsService->destroy($id);
            return back()->with('status', 'Xóa chi tiết đơn hàng thành công !');
            // return redirect()->route('orders.show', $request->order_id)->with('status', 'Xóa chi tiết đơn hàng thành công !');
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return back()->with('status', 'Xóa không thành công! ' . $e);
            // return redirect()->route('orders.show',  $request->order_id)->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
