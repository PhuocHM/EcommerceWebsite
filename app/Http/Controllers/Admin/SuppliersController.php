<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuppliersRequest;
use App\Services\SuppliersService;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    private $supplierService;
    public function __construct(SuppliersService $supplierService)
    {
        $this->supplierService = $supplierService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $suppliers = $this->supplierService->getAll($request);
        $params = [
            'suppliers' => $suppliers,
        ];
        return view('admin.suppliers.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuppliersRequest $request)
    {
        $this->supplierService->store($request);
        return redirect()->route('suppliers.index')->with('status', 'Thêm nhà cung cấp thành công !');
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
        $supplier = $this->supplierService->find($id);
        $params = [
            'supplier' => $supplier
        ];
        return view('admin.suppliers.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuppliersRequest $request, $id)
    {
        $this->supplierService->update($request, $id);
        return redirect()->route('suppliers.index')->with('status', 'Cập nhật nhà cung cấp thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->supplierService->destroy($id);
        return redirect()->route('suppliers.index')->with('status', 'Xóa nhà cung cấp thành công !');
    }
}
