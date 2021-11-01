<div class="container">
    <ol class="breadcrumb-page">
        <li><a href="index.html">Home </a></li>
        <li class="active"><a href="#">Shopping Cart</a></li>
    </ol>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form class="form-cart">
                <div class="table-cart">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="tb-image"></th>
                                <th class="tb-product">Tên sản phẩm</th>
                                <th class="tb-price">Giá</th>
                                <th class="tb-qty">Số lượng</th>
                                <th class="tb-total">Tổng tiền</th>
                                <th class="tb-remove"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td class="tb-image"><a href="#" class="item-photo"><img src="{{ asset($item->cover2Image->first()->image) }}" alt="cart"></a>
                                </td>
                                <td class="tb-product">
                                    <div class="product-name"><a href="#">{{ $item->name  }}</a></div>
                                </td>
                                <td class="tb-price">
                                    @if($item->discount->first() != null)
                                    <span class="price">{{ number_format($item->price-$item->discount->first()->amounts) }}&ensp;<u>đ</u></span>
                                    @else
                                    <span class="price">{{ number_format($item->price) }}&ensp;<u>đ</u></span>
                                    @endif
                                </td>
                                <td class="tb-qty">
                                    <div class="quantity">
                                        <div class="buttons-added">
                                            <input id="product_quantity_{{ $item->cartItem->first()->id  }}" type="text" value="{{ $item->cartItem->first()->quantity }}" class="input-text qty text" size="1">
                                            <a href="#" class="sign plus"><i class="fa fa-plus syncQuantity" data-product_id="{{ $item->cartItem->first()->id  }}"></i></a>
                                            <a href="#" class="sign minus"><i class="fa fa-minus syncQuantity" data-product_id="{{ $item->cartItem->first()->id  }}"></i></a>
                                        </div>
                                    </div>
                                </td>
                                <td class="tb-total">
                                    @if($item->discount->first() != null)
                                    <span class="price">{{ number_format(($item->price-$item->discount->first()->amounts)*$item->cartItem->first()->quantity) }}&ensp;<u>đ</u></span>
                                    @else
                                    <span class="price">{{ number_format($item->price * $item->cartItem->first()->quantity) }}&ensp;<u>đ</u></span>
                                    @endif
                                </td>
                                <td class="tb-remove">
                                    <a href="#" class="action-remove"><span><i class="flaticon-close" aria-hidden="true"></i></span></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="cart-actions">
                    <button type="button" class="btn-continue">
                        <a href="{{ route('index') }}" style="color:white">Tiếp tục mua sắm</a>
                    </button>

                </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="order-summary">
                <h4 class="title-shopping-cart">Hóa đơn</h4>
                <div class="checkout-element-content">
                    <span class="order-left">Tổng tiền:<span>{{ number_format($total) }}&ensp;<u>đ</u></span></span>
                    <span class="order-left">Phí ship:<span>Free Shipping</span></span>
                    <span class="order-left">Tổng:<span>{{ number_format($total) }}&ensp;<u>đ</u></span></span>
                    <button type="button" class="btn-checkout" data-toggle="modal" data-target=".bd-example-modal-lg">
                        <span>Checkout</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Large modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin đơn hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close_order_button" onclick="deleteSessionCoupon()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div style="display: none" class="alert alert-danger" role="alert" id="message_coupon"></div>
                            <div style="display: none" class="alert alert-success" role="alert" id="success_coupon"> </div>
                            <div class="form-group ">
                                <label class="title">Tổng thanh toán : </label>
                                <input type="hidden" class="form-control" id="total_money" name="total_money" value="{{ $total }}">
                                <input type="hidden" class="form-control" id="before_total_money" name="before_total_money" value="{{ $total }}">
                                <span style="color:red" id="display_total_money">{{ number_format($total) }}&ensp;<u>đ</u></span>
                            </div>
                            <div>
                                <label class="inline">
                                    <input id="checkbox_coupon" type="checkbox" onchange="hasCoupon()">
                                    <span class="input"></span>Tôi có mã giảm giá
                                </label>
                            </div>
                            <div class="form-group" id="coupon_main" style="display:none">
                                <label class="title">Nhập mã giảm giá</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="coupon_code_input" id="coupon_code_input">
                                    </div>
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-sucess" id="check_coupon_button" onclick="checkCoupon()">Kiểm tra</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary">Đặt hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="block-recent-view single">
    <div class="container">
        <div class="title-of-section">Có thể bạn sẽ thích</div>
        <div class="row">
            @foreach ($related_items as $related_item)
            <div class="col-md-4">
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="#"><img src="{{ asset($related_item->cover2Image->first()->image) }}" alt="r3"></a>
                            </div>
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="{{ route('product-detail.show', $related_item->id) }}">{{ $related_item->name }}&ensp;<u>đ</u></a></div>
                            <span class="price price-dark">
                                @if($related_item->discount->first() != null)
                                <ins style="color:red">{{ number_format($related_item->price-$related_item->discount->first()->amounts) }}&ensp;<u>đ</u></ins>
                                <del>{{ number_format($related_item->price) }}</del>
                                @else
                                <ins style="color:red">{{ number_format($related_item->price) }}&ensp;<u>đ</u></ins>
                                @endif

                            </span>
                            <span class="star-rating">

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <i class="fa fa-star" aria-hidden="true"></i>

                                <span class="review">5 Review(s)</span>

                            </span>
                            <div class="group-btn-hover style2">
                                <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
