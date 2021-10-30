<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Users\Attributes;
use App\Models\Users\Categories;
use App\Models\Users\Products;
use App\Models\Users\ProductImage;
use App\Models\Users\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users\Carts;
use App\Models\Users\CartItems;
use App\Models\Users\Coupons;
use App\Models\Users\Discounts;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $new_products = ProductImage::join('products', 'products.id', 'product_image.product_id')->where('type', '=', 1)->orderBy('products.created_at', 'DESC')->offset(3)->limit(6)->get();
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
    public function deleteCartItem(Request $request)
    {
        $item_cart = CartItems::find($request->product_id);
        $item_cart->delete();
        return response()->json(['success' => 'Da xoa thanh cong']);
    }

    public function syncCart(Request $request)
    {
        $item = CartItems::find($request->product_id);
        $item->quantity = $request->quantity;
        $item->save();
        return response()->json(['success' => 'Oke']);
    }

    public function checkCart()
    {
        $user_id = Auth::id();
        if (!$user_id) {
            return false;
        }
        $check_user_cart = Carts::where('user_id', $user_id)->get();
        if ($check_user_cart->first() != null) {
            $product_ids = Carts::where('user_id', $user_id)->first()->cart_item->pluck('product_id')->toArray();
            $cart_items = Products::with('cover2Image', 'discount')->whereIn('id', $product_ids)->get();
            $total = 0;
            foreach ($cart_items as $item) {
                if ($item->discount->first() != null) {
                    $total += ($item->price - $item->discount->first()->amounts) * $item->cartItem->first()->quantity;
                } else {
                    $total += $item->price * $item->cartItem->first()->quantity;
                }
            }
        } else {
            $product_ids = [];
            $cart_items = [];
            $total = 0;
        }

        $params = [
            "cart_items" => $cart_items,
            "total" => $total,
            "check_user_cart" => $check_user_cart,
        ];
        return view('include.cart', $params)->render();
    }

    public function showCart()
    {
        $user_id = Auth::id();
        $product_ids = Carts::where('user_id', $user_id)->first()->cart_item->pluck('product_id')->toArray();
        $items = Products::with('cover2Image', 'discount', 'cartItem')->whereIn('id', $product_ids)->get();
        $total = 0;
        foreach ($items as $item) {
            if ($item->discount->first() != null) {
                $total += ($item->price - $item->discount->first()->amounts) * $item->cartItem->first()->quantity;
            } else {
                $total += $item->price * $item->cartItem->first()->quantity;
            }
        }
        $cate_ids = $items->pluck('category_id')->toArray();
        $related_items = Products::with('cover2Image', 'discount')->whereIn('category_id', $cate_ids)->get();
        $params = [
            'items' => $items,
            'related_items' => $related_items,
            "total" => $total,
        ];
        return view('include.shopping-cart', $params)->render();
    }

    public function getFlashSale()
    {
        $now = date("Y-m-d H:i:s");
        $flash_sale = Discounts::where('expired_date', '>=', $now)->first();
        return response()->json(['success' => $flash_sale]);
    }

    public function addComment(Request $request)
    {
        $user_id = Auth::id();
        $comment = new Comments;
        $comment->product_id = $request->id_product;
        $comment->user_id = $user_id;
        $comment->content = $request->comment_input;
        $comment->star_value = $request->star_input;
        $comment->save();

        return response()->json(['success' => 'Đã thêm nhận xét thành công !']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkCoupon(Request $request)
    {

        $coupon = Coupons::where('code', $request->coupon_code)->get();
        if (!Session::has('used_coupon')) {
            $used_coupon = [];
        } else {
            $used_coupon = Session::get('used_coupon');
        }
        if ($coupon->first() != null) {
            if (in_array($coupon->first()->code, $used_coupon)) {
                return response()->json(['error' => 'Mã giảm giá đã được sử dụng']);
            } else {
                array_push($used_coupon, $coupon->first()->code);
                Session::put('used_coupon', $used_coupon);
                return response()->json(['success' => $coupon->first()->amounts]);
            }
        }
        return response()->json(['error' => 'Mã giảm giá không hợp lệ']);
    }
    public function deleteSession()
    {
        Session::forget('used_coupon');
    }
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

    public function seach(Request $request)
    {
        $products = Products::where('name', 'LIKE', '%' . $request->term . '%')->limit(3)->get();
        return response()->json($products);
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
