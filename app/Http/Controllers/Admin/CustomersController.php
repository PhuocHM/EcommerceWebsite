<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomersRequest;
use App\Services\CustomersService;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    private $customersService;
    public function __construct(CustomersService $customersService)
    {
        $this->customersService = $customersService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('customer-show', 'customer-show');
        $customers = $this->customersService->getAll($request);
        $params = [
            'customers' => $customers,
        ];
        return view('admin.customers.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = $this->customersService->create();
        $params = [
            'users' => $users,
        ];
        return view('admin.customers.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomersRequest $request)
    {

        $customers = $this->customersService->store($request);
        return redirect()->route('customers.index')->with('status', 'Thêm khách hàng thành công !');
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
        $users = $this->customersService->create_user();
        $customers = $this->customersService->edit($id);
        $params = [
            'users'    => $users,
            'customers'    =>  $customers
        ];
        return view('admin.customers.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomersRequest $request, $id)
    {
        $this->customersService->update($request, $id);
        return redirect()->route('customers.index')->with('status', 'Cập nhật khách hàng thành công!');
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
            $this->customersService->destroy($id);
            return redirect()->route('customers.index')->with('status', 'Xóa khách hàng thành công !');
        } catch (\Exception $e) {
            return redirect()->route('customers.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
