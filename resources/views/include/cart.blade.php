@if($check_user_cart->first() != null)
<!-- Modal -->

{{-- --}}
<div class="modal fade" id="delete_item_cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa sản phẩm này không ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="delete_button">Xóa</button>
            </div>
        </div>
    </div>
</div>

{{-- End Modal --}}
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
                Bạn có <span>{{ count($cart_items) }}</span> sản phẩm trong giỏ hàng
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
                            <a href="#" class="remove" data-toggle="modal" data-target="#delete_item_cart"><i class="fa fa-times" aria-hidden="true" onclick="confirmDelete({{$item->cartItem->first()->id}})"></i></a>
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
                <span class="label">Tổng :</span>
                <span class="price">{{ number_format($total) }}&ensp;<u>đ</u></span>
            </div>
            <div class="actions">

                <a href="{{ route('cart.index') }}" class="btn btn-viewcart" href="shopping-cart.html">Xem giỏ hàng</a>
            </div>
        </div>
    </form>
</div>
@else
<a class="minicart" href="#">

    <span class="counter qty">

        <span class="cart-icon"><img src="{{ asset('images/cart.png') }}" alt="#"></span>

        <span class="counter-number">0</span>

    </span>
    <span class="counter-your-cart">

        <span class="counter-label">Giỏ hàng:</span>

        <span class="counter-price">0</span>

    </span>
</a>
<div class="parent-megamenu">
    <form>
        <div class="minicart-content-wrapper">
            <div class="subtitle">
                Bạn có <span>0</span> sản phẩm trong giỏ hàng
            </div>
            <div class="minicart-items-wrapper">
                <ol class="minicart-items">
                    <span style="color:red;text-decoration:none">Không có sản phẩm nào</span>
                </ol>
            </div>
            <div class="subtotal">
                <span class="label">Tổng :</span>
                <span class="price">0&ensp;<u>đ</u></span>
            </div>
            <div class="actions">
                <a href="{{ route('cart.index') }}" class="btn btn-viewcart" href="shopping-cart.html">Xem giỏ hàng</a>
            </div>
        </div>
    </form>
</div>

@endif
