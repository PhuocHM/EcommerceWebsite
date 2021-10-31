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

        $name_sort = '--Lọc theo--';
        $sort_by = '';
        if (isset($request->sort_by)) {
            $sort_by = $request->sort_by;
            if ($sort_by == 'newest') {
                $orders = Orders::orderBy('id', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Từ cũ đến mới';
            } elseif ($sort_by == 'latest') {
                $orders = Orders::orderBy('id', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Từ mới đến cũ';
            } elseif ($sort_by == 'name_a_to_z') {
                $orders = Orders::with('customer')->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->orderBy('name', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Tên khách hàng A đến Z';
            } elseif ($sort_by == 'name_z_to_a') {
                $orders = Orders::with('customer')->join('customers', 'customers.id', '=', 'orders.customer_id')
                    ->orderBy('name', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Tên khách hàng Z đến A';
            } elseif ($sort_by == 'amount_a_to_z') {
                $orders = Orders::orderBy('total_price', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Số tiền Order ít tới nhiều';
            } elseif ($sort_by == 'amount_z_to_a') {
                $orders = Orders::orderBy('total_price', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Số tiền Order nhiều tới ít';
            }
        }

        $params = [
            'orders' => $orders,
            'sort_by' => $sort_by,
            'name_sort' => $name_sort,
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
