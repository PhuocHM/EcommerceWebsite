<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Users\CartItems;
use App\Models\Users\Carts;
use App\Models\Users\OrderItems;
use App\Models\Users\Orders;
use App\Models\Users\Products;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Website.shopping-cart');
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
        $user_id = Auth::id();
        $product_ids = Carts::where('user_id', $user_id)->first()->cart_item->pluck('product_id')->toArray();
        $cart_id = Carts::where('user_id', $user_id)->get();
        $items = Products::with('cover2Image', 'discount', 'cartItem')->whereIn('id', $product_ids)->get();
        // Place New Orders
        $order = new Orders;
        $order->code = $cart_id->first()->code;
        $order->customer_id = $user_id;
        $order->total_price = $request->total_money;
        $order->save();
        // Place Order Item
        foreach ($items as $key => $item) {
            $order_item = new OrderItems;
            $order_item->product_id = $item->cartItem->first()->product_id;
            $order_item->price = $item->price;
            $order_item->quantity = $item->cartItem->first()->quantity;
            $order_item->order_id = $order->id;
            $order_item->save();
            // Update sold 
            $sold = Products::find($item->cartItem->first()->product_id);
            $sold->sold = $item->cartItem->first()->quantity;
            $sold->save();
            // Delete Carts
            $old_cart_item = CartItems::find($item->cartItem->first()->id);
            $old_cart_item->delete();
        }
        $old_cart = Carts::find($cart_id->first()->id);
        $old_cart->delete();
        return redirect()->route('order.index');
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
