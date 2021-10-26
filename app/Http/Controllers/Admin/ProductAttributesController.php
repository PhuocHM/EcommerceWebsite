<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAttributesRequest;
use App\Services\ProductAttributesService;
use Illuminate\Http\Request;

class ProductAttributesController extends Controller
{
    private $productAttributesService;
    public function __construct(ProductAttributesService $productAttributesService)
    {
        $this->productAttributesService = $productAttributesService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productAttributes = $this->productAttributesService->getAll(); 
        // dd($productAttributes->toArray());
        $params = [
            'productAttributes' => $productAttributes,
        ];
        return view('admin.productAttributes.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->productAttributesService->create_product();
        $attributes     = $this->productAttributesService->create_attribute();
        $params = [
            'products' => $products,
            'attributes' => $attributes
        ];
        return view('admin.productAttributes.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductAttributesRequest $request)
    {
        $this->productAttributesService->store($request);
        return redirect()->route('productAttributes.index')->with('status','Thêm thuộc tính sản phẩm thành công !');
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
        $products         = $this->productAttributesService->create_product();
        $attributes       = $this->productAttributesService->create_attribute();
        $productAttribute = $this->productAttributesService->edit($id);
        $params = [
            'products'         => $products,
            'attributes'       => $attributes,
            'productAttribute' => $productAttribute
        ];
    
        return view('admin.productAttributes.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductAttributesRequest $request, $id)
    {
        $this->productAttributesService->update($request, $id);
        return redirect()->route('productAttributes.index')->with('status','Cập nhật thuộc tính sản phẩm thành công!');
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
            $this->productAttributesService->destroy($id);
            return redirect()->route('productAttributes.index')->with('status', 'Xóa thuộc tính sản phẩm thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('productAttributes.index')->with('status', 'Xóa không thành công! '.$e);

        } 
    }
}
