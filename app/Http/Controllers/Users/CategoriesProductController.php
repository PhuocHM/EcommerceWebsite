<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Attributes;
use App\Models\Users\ProductAttribute;
use App\Models\Users\Products;
use Illuminate\Http\Request;

class CategoriesProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $filter_attributes = $request->attribute_content;
        $category_products = Products::with('cover2Image')
            ->where('category_id', '=', $id);
        if ($filter_attributes != null) {
            $category_products->join('product_attribute', 'product_attribute.product_id', 'products.id');
            $category_products->whereIn('product_attribute.content', $filter_attributes);
            $category_products->select('products.*');
        }

        $category_products = $category_products->orderBy('products.created_at')->paginate(6);
        $attributes = Attributes::with('product')->where('category_id', '=', $id)->get();
        $params = [
            'category_products' => $category_products,
            "attributes" => $attributes,
            "filter_attributes" => $filter_attributes,
        ];
        return view('Website.category-product', $params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
