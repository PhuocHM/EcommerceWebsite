<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImagesRequest;
use App\Services\ProductImagesService;
use Illuminate\Http\Request;

class ProductImagesController extends Controller
{
    private $productImagesService;
    public function __construct(ProductImagesService $productImagesService)
    {
        $this->productImagesService = $productImagesService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productImages = $this->productImagesService->getAll($request);
        $params = [
            'productImages' => $productImages,
        ];
        return view('admin.productImages.index', $params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = $this->productImagesService->create_product();
        $params = [
            'products' => $products,
        ];
        return view('admin.productImages.create', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductImagesRequest $request)
    {
        $this->productImagesService->store($request);
        return redirect()->route('productImages.index')->with('status','Thêm hình ảnh sản phẩm thành công !');
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
        $products     = $this->productImagesService->create_product();
        $productImage = $this->productImagesService->edit($id);
        $params = [
            'products'   => $products,
            'productImage' => $productImage
        ];
        return view('admin.productImages.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductImagesRequest $request, $id)
    {
        $this->productImagesService->update($request, $id);
        return redirect()->route('productImages.index')->with('status','Cập nhật hình ảnh sản phẩm thành công!');
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
            $this->productImagesService->destroy($id);
            return redirect()->route('productImages.index')->with('status', 'Xóa hình ảnh sản phẩm thành công !');
        }
        catch(\Exception $e){
            return redirect()->route('productImages.index')->with('status', 'Xóa không thành công! '.$e);
        }    
    }
}
