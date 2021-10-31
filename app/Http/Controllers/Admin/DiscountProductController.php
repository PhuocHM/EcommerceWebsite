<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DiscountProduct;
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

        $name_sort = '--Lọc theo--';
        $sort_by = '';
        if (isset($request->sort_by)) {
            $sort_by = $request->sort_by;
            if ($sort_by == 'newest') {
                $discountProducts = DiscountProduct::orderBy('id', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Từ cũ đến mới';
            } elseif ($sort_by == 'latest') {
                $discountProducts = DiscountProduct::orderBy('id', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Từ mới đến cũ';
            } elseif ($sort_by == 'name_a_to_z') {
                $discountProducts = DiscountProduct::with('product')->join('products', 'discount_product.product_id', '=', 'products.id')
                    ->orderBy('products.name', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Tên sản phẩm A đến Z';
            } elseif ($sort_by == 'name_z_to_a') {
                $discountProducts = DiscountProduct::with('product')->join('products', 'discount_product.product_id', '=', 'products.id')
                    ->orderBy('products.name', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Tên sản phẩm Z đến A';
            } elseif ($sort_by == 'amount_a_to_z') {
                $discountProducts = DiscountProduct::with('discount')->join('discounts', 'discount_product.discount_id', '=', 'discounts.id')
                    ->orderBy('amounts', 'ASC')->paginate(5)->appends(request()->query());
                $name_sort = 'Số tiền KM ít tới nhiều';
            } elseif ($sort_by == 'amount_z_to_a') {
                $discountProducts = DiscountProduct::with('discount')->join('discounts', 'discount_product.discount_id', '=', 'discounts.id')
                    ->orderBy('amounts', 'DESC')->paginate(5)->appends(request()->query());
                $name_sort = 'Số tiền KM nhiều tới ít';
            }
        };

        $params = [
            'discountProducts' => $discountProducts,
            'name_sort' => $name_sort,
            'sort_by' => $sort_by,

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
        return redirect()->route('discountProduct.index')->with('status', 'Thêm chiết khấu sản phẩm thành công !');
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
        return redirect()->route('discountProduct.index')->with('status', 'Cập nhật chiết khấu sản phẩm thành công!');
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
            $this->discountProductService->destroy($id);
            return redirect()->route('discountProduct.index')->with('status', 'Xóa thuộc tính sản phẩm thành công !');
        } catch (\Exception $e) {
            return redirect()->route('discountProduct.index')->with('status', 'Xóa không thành công! ' . $e);
        }
    }
}
