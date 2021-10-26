<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\Attributes;
use App\Models\Users\Categories;
use App\Models\Users\Products;
use App\Models\Users\ProductImage;
use App\Models\Users\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users\Carts;
use App\Models\Users\CartItems;
use App\Models\Users\Discounts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductImage::join('products', 'products.id', 'product_image.product_id')->where('type', '=', 1)->orderBy('products.created_at', 'DESC')->limit(3)->get();
        $new_products = ProductImage::join('products', 'products.id', 'product_image.product_id')->where('type', '=', 1)->orderBy('products.created_at', 'DESC')->limit(6)->get();
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
        $random_products = Products::join('product_image', 'products.id', 'product_image.product_id')->where('type', '=', 1)
            ->join('comments', 'products.id', 'comments.product_id')->inRandomOrder()->limit(6)->get()->chunk(2);
        $highest_star_products = Products::select(DB::raw('products.name,products.price,product_id,count(product_id) as total_comments, AVG(star_value) as avg_star_value'))
            ->join('comments', 'products.id', 'comments.product_id')
            ->groupBy('product_id')->orderBy('avg_star_value', 'DESC')->orderBy('total_comments', 'DESC')->limit(6)->get()->chunk(2);
        $latest_comments = Comments::select('comments.product_id', 'star_value', 'users.name as user_name', 'image', 'products.name', 'comments.created_at', 'content')
            ->orderBy('comments.created_at', 'DESC')
            ->join('product_image', 'product_image.id', 'comments.product_id')
            ->join('products', 'products.id', 'comments.product_id')
            ->join('users', 'users.id', 'comments.user_id')
            ->limit(4)->get();
        $data = [];
        $sales_items = Products::with('cover2Image', 'discount', 'comment')->get()
            ->each(function ($item) use (&$data) {
                $item1 = $item->toArray();
                if ($item->comment->count('star_value') > 0) {
                    $avg = ($item->comment->sum('star_value')) /  ($item->comment->count('star_value'));
                } else {
                    $avg = 5;
                }
                $item1['rate'] = $avg;
                array_push($data, $item1);
            });
        $params = [
            "products" => $products,
            "new_products" => $new_products,
            "categories" => $tree,
            "random_products" => $random_products,
            "highest_star_products" => $highest_star_products,
            "latest_comments" => $latest_comments,
            "sales_items" => $data,
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
    public function checkCart()
    {
        $user_id = Auth::id();
        $product_ids = Carts::where('user_id', $user_id)->first()->cart_item->pluck('product_id')->toArray();
        $cart_items = Products::with('cover2Image', 'discount')->whereIn('id', $product_ids)->get();
        $params = [
            "cart_items" => $cart_items
        ];
        return view('include.cart', $params)->render();
    }
    public function getFlashSale()
    {
        $now = date("Y-m-d H:i:s");
        $flash_sale = Discounts::where('expired_date', '>=', $now)->first();
        return response()->json(['success' => $flash_sale]);
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
    public function addToCart(Request $request)
    {
        $user_id = Auth::id();
        $product_info = Products::find($request->product_id);
        if (!isset($request->product_quantity)) {
            $check_cart = Carts::where('user_id', '=', $user_id)->first();
            if ($check_cart == null) {
                $cart = new Carts;
                $cart->code = Carbon::now()->timestamp;
                $cart->user_id = $user_id;
                $cart->save();

                $cart_items = new CartItems;
                $cart_items->product_id = $request->product_id;
                $cart_items->quantity = 1;
                $cart_items->cart_id = $cart->id;
                $cart_items->save();
            } else {
                $product = CartItems::where('product_id', '=', $request->product_id)->first();
                if ($product == null) {
                    $cart_items = new CartItems;
                    $cart_items->product_id = $request->product_id;
                    $cart_items->quantity = 1;
                    $cart_items->cart_id = $check_cart->id;
                    $cart_items->save();
                } else {
                    $product->quantity += 1;
                    $product->save();
                }
            }
        } else {
            $check_cart = Carts::where('user_id', '=', $user_id)->first();
            if ($check_cart == null) {
                $cart = new Carts;
                $cart->code = Carbon::now()->timestamp;
                $cart->user_id = $user_id;
                $cart->save();

                $cart_items = new CartItems;
                $cart_items->product_id = $request->product_id;
                $cart_items->quantity = $request->product_quantity;
                $cart_items->cart_id = $cart->id;
                $cart_items->save();
            } else {
                $product = CartItems::where('product_id', '=', $request->product_id)->first();
                if ($product == null) {
                    $cart_items = new CartItems;
                    $cart_items->product_id = $request->product_id;
                    $cart_items->quantity = $request->product_quantity;
                    $cart_items->cart_id = $check_cart->id;
                    $cart_items->save();
                } else {
                    $product->quantity += $request->product_quantity;
                    $product->save();
                }
            }
            return response()->json(['success' => $product_info]);
        }
        return response()->json(['success' => $product_info]);
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
