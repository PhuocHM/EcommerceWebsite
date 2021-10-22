<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Categories;
use App\Models\Users\Products;
use App\Models\Users\ProductsImages;
use App\Models\Users\Comments;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductsImages::join('products', 'products.id', 'products_images.product_id')->where('type', '=', 1)->orderBy('products.created_at', 'DESC')->limit(3)->get();
        $new_products = ProductsImages::join('products', 'products.id', 'products_images.product_id')->where('type', '=', 1)->orderBy('products.created_at', 'DESC')->limit(6)->get();
        $categories = Categories::all();
        $tree = [];
        foreach ($categories as $key => $category) {
            if ($category->parent_id == 0) {
                $tree[$category->id] = [
                    "id" => $category->id,
                    "name" => $category->name,
                    "children" => [],
                ];
            }
        }
        foreach ($categories as $key => $category) {
            if ($category->parent_id != 0) {
                $tree[$category->parent_id]['children'][] = [
                    "id" => $category->id,
                    "name" => $category->name,
                ];
            }
        }
        $highest_star_product = Comments::all();
        $random_products = Products::join('products_images', 'products.id', 'products_images.product_id')->where('type', '=', 1)
            ->join('comments', 'products.id', 'comments.product_id')->inRandomOrder()->limit(6)->get()->chunk(2);
        // dd($random_products);
        $params = [
            "products" => $products,
            "new_products" => $new_products,
            "categories" => $tree,
            "random_products" => $random_products
        ];
        return view('Website.index', $params);
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
