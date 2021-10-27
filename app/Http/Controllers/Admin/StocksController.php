<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProductsService;
use App\Services\StocksService;
use App\Services\SuppliersService;
use App\Services\EmployeesService;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    private $stocksService;
    private $productsService;
    private $employeesService;
    private $suppliersService;
    public function __construct(StocksService $stocksService, ProductsService $productsService, EmployeesService $employeesService, SuppliersService $suppliersService)
    {
        $this->stocksService = $stocksService;
        $this->productsService = $productsService;
        $this->employeesService = $employeesService;
        $this->suppliersService = $suppliersService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stock = $this->stocksService->getAll($request);
        $params = [
            'stock' => $stock,
        ];
        return view('admin.stocks.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->stocksService->product();
        $suppliers = $this->stocksService->supplier();
        $employees = $this->stocksService->employee();

        $params = [
            'products' => $products,
            'suppliers' => $suppliers,
            'employees' => $employees
        ];
        return view('admin.stocks.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->stocksService->store($request);
        return redirect()->route('stocks.index')->with('status', 'Thêm nhập kho thành công !');
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
        $stock = $this->stocksService->find($id);
        $products = $this->stocksService->product();
        $suppliers = $this->stocksService->supplier();
        $employees = $this->stocksService->employee();
        $params = [
            'stock' => $stock,
            'products' => $products,
            'suppliers' => $suppliers,
            'employees' => $employees
        ];
        return view('admin.stocks.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->stocksService->update($request, $id);
        return redirect()->route('stocks.index')->with('status', 'Sửa nhập kho thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->stocksService->destroy($id);
        return redirect()->route('stocks.index')->with('status', 'Xóa nhập kho thành công !');
    }
}
