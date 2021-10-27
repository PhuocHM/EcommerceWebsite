<a class="minicart" href="#">

    <span class="counter qty">

        <span class="cart-icon"><img src="{{ asset('images/cart.png') }}" alt="#"></span>

        <span class="counter-number">{{ count($cart_items) }}</span>

    </span>
    <span class="counter-your-cart">

        <span class="counter-label">Giỏ hàng:</span>

        <span class="counter-price">{{ number_format($total) }}</span>

    </span>
</a>
<div class="parent-megamenu">
    <form>
        <div class="minicart-content-wrapper">
            <div class="subtitle">
                You have <span>{{ count($cart_items) }}</span> item(s) in your cart
            </div>
            <div class="minicart-items-wrapper">
                <ol class="minicart-items">
                    @if($cart_items->first()!= null)
                    @foreach($cart_items as $key => $item)
                    <li class="product-inner">
                        <div class="product-thumb style1">
                            <div class="thumb-inner">
                                <a href="#"><img src="{{ asset($item->cover2Image->first()->image) }}" alt="c1"></a>
                            </div>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="#">{{$item->name}}
                                </a></div>
                            <a href="#" class="remove"><i class="fa fa-times" aria-hidden="true" onclick="deleteCartItem({{$item->cartItem->first()->id}})"></i></a>
                            <span class="price price-dark">
                                @if ($item->discount && $item->discount->first())
                                <ins style="color: red">{{ number_format(($item->price - $item->discount->first()->amounts)*$item->cartItem->first()->quantity) }}&ensp;<u>đ</u></ins>
                                <del>{{ $item->price * $item->cartItem->first()->quantity }}&ensp;<u>đ</u></del>
                                @else
                                <ins style="color: red">{{ number_format($item->price  * $item->cartItem->first()->quantity) }}&ensp;<u>đ</u></ins>
                                @endif
                            </span>
                        </div>
                    </li>
                    @endforeach
                    @else
                    <span style="color:red;text-decoration:none">Không có sản phẩm nào</span>
                    @endif
                </ol>
            </div>
            <div class="subtotal">
                <span class="label">Total :</span>
                <span class="price">{{ number_format($total) }}&ensp;<u>đ</u></span>
            </div>
            <div class="actions">
                {{-- <div class="row">
                    <div class="col-xs-6">
                        <a href="{{ route('cart.index') }}" class="btn btn-viewcart" href="shopping-cart.html">View cart</a>
            </div>
            <div class="col-xs-6">
                <a class="btn btn-checkout" href="checkout.html">Checkout</a>
            </div>
        </div> --}}
        <a href="{{ route('cart.index') }}" class="btn btn-viewcart" href="shopping-cart.html">View cart</a>
</div>
</div>
</form>
</div>
