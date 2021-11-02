<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Products;
use App\Services\ProductAttributesService;
use Illuminate\Http\Request;
use App\Models\Admin\ProductAttributes;
use App\Models\Admin\Attributes;

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
    public function index(Request $request)
    {
        $productAttributes = $this->productAttributesService->getAll($request);
        $name_sort = '--Lọc theo--';
        $sort_by = '';
        if(isset($request->sort_by)){
            $sort_by =$request->sort_by;
              if($sort_by=='newest'){
              $productAttributes = ProductAttributes::orderBy('id','ASC')->paginate(5)->appends(request()->query());
              $name_sort = 'Từ cũ đến mới';
          }
          elseif($sort_by=='latest'){
              $productAttributes = ProductAttributes::orderBy('id','DESC')->paginate(5)->appends(request()->query());
              $name_sort = 'Từ mới đến cũ';
          }
         
          elseif($sort_by=='product_a_to_z'){
            $productAttributes =  ProductAttributes::with('product')->join('products', 'products.id','=','product_attribute.product_id')
            ->orderBy('name','DESC')->paginate(5)->appends(request()->query());
           
            $name_sort = 'Thuộc sản phẩm A đến Z';
        }
        elseif($sort_by=='product_z_to_a'){
            $productAttributes =  ProductAttributes::with('product')->join('products', 'products.id','=','product_attribute.product_id')
            ->orderBy('name','ASC')->paginate(5)->appends(request()->query());
            $name_sort = 'Thuộc sản phẩm Z đến A';
        }
        elseif($sort_by=='attribute_a_to_z'){
            $productAttributes =  ProductAttributes::with('attribute')->join('attributes', 'attributes.id','=','product_attribute.attribute_id')
            ->orderBy('attributes.name','ASC')->paginate(5)->appends(request()->query());
           
            $name_sort = 'Thuộc thuộc tính A đến Z';
        }
        elseif($sort_by=='attribute_z_to_a'){
            $productAttributes =  ProductAttributes::with('attribute')->join('attributes', 'attributes.id','=','product_attribute.attribute_id')
            ->orderBy('attributes.name','DESC')->paginate(5)->appends(request()->query());
            $name_sort = 'Thuộc thuộc tính Z đến A';
        }
      };
        
        $params = [
            'productAttributes' => $productAttributes,
            'name_sort' => $name_sort,
            'sort_by' => $sort_by,
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
    public function store(Request $request)
    {
        // dd($request->product_id);
        // dd($request->attribute_id);
        $this->productAttributesService->store($request);
        return redirect()->route('productAttributes.index')->with('status', 'Thêm thuộc tính sản phẩm thành công !');
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
    public function update(Request $request, $id)
    {
        $this->productAttributesService->update($request, $id);
        return redirect()->route('productAttributes.index')->with('status', 'Cập nhật thuộc tính sản phẩm thành công!');
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
            $this->productAttributesService->destroy($id);
            return redirect()->route('productAttributes.index')->with('status', 'Xóa thuộc tính sản phẩm thành công !');
        } catch (\Exception $e) {
            return redirect()->route('productAttributes.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
