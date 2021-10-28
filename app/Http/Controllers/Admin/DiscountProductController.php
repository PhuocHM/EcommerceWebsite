<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DiscountProductService;
use Illuminate\Http\Request;

class DiscountProductController extends Controller
{
    private $discountProductService;
    public function __construct(DiscountProductService $discountProductService)
    {
        $this->discountProductService = $discountProductService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $discountProducts = $this->discountProductService->getAll($request); 
        // dd($discountProduct->toArray());
        $params = [
            'discountProducts' => $discountProducts,
        ];
        return view('admin.discountProduct.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products       = $this->discountProductService->create_product();
        $discounts      = $this->discountProductService->create_discount();
        $params = [
            'products' => $products,
            'discounts' => $discounts
        ];
        return view('admin.discountProduct.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->discountProductService->store($request);
        return redirect()->route('discountProduct.index')->with('status','Thêm chiết khấu sản phẩm thành công !');
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
        $products         = $this->discountProductService->create_product();
        $discounts       = $this->discountProductService->create_discount();
        $discountProduct = $this->discountProductService->edit($id);
        $params = [
            'products'         => $products,
            'discounts'       => $discounts,
            'discountProduct' => $discountProduct
        ];
    
        return view('admin.discountProduct.edit', $params);
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
        $this->discountProductService->update($request, $id);
        return redirect()->route('discountProduct.index')->with('status','Cập nhật chiết khấu sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $this->discountProductService->destroy($id);
            return redirect()->route('discountProduct.index')->with('status', 'Xóa thuộc tính sản phẩm thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('discountProduct.index')->with('status', 'Xóa không thành công! '.$e);

        } 
    }
}
