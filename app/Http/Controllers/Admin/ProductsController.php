<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProductsService;
use Illuminate\Http\Request;

use App\Http\Requests\ProductsRequest;


class ProductsController extends Controller
{
    private $productsService;
    public function __construct(ProductsService $productsService)
    {
        $this->productsService = $productsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = $this->productsService->getAll($request);
        $categories = $this->productsService->create_category();
        $params = [
            'products' => $products,
            'categories' =>  $categories
        ];
        return view('admin.products.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->productsService->create_category();
        $brands     = $this->productsService->create_brand();
        $params = [
            'categories' => $categories,
            'brands' => $brands
        ];
        return view('admin.products.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {
        $products = $this->productsService->store($request);
        return redirect()->route('products.index')->with('status', 'Thêm sản phẩm thành công !');
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
        $categories = $this->productsService->create_category();
        $brands     = $this->productsService->create_brand();
        $products   = $this->productsService->edit($id);
        $params = [
            'categories'     => $categories,
            'products'       =>  $products,
            'brands'         =>  $brands
        ];
        return view('admin.products.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        $this->productsService->update($request, $id);
        return redirect()->route('products.index')->with('status', 'Cập nhật sản phẩm thành công!');
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
            $this->productsService->destroy($id);
            return redirect()->route('products.index')->with('status', 'Xóa sản phẩm thành công !');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
