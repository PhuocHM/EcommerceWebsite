@extends('include.layout')
@section('title', 'Theo dõi đơn hàng')
@section('main')

<body class="page-inner">
    <div class="wrapper">
        <form id="block-search-mobile" method="get" class="block-search-mobile">
            <div class="form-content">
                <div class="control">
                    <a href="#" class="close-block-serach"><span class="icon flaticon-close"></span></a>
                    <input type="text" name="search" placeholder="Search" class="input-subscribe">
                    <button type="submit" class="btn search">
                        <span><i class="flaticon-magnifying-glass" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </form>
        <div id="block-quick-view-popup" class="block-quick-view-popup">
            <div class="quick-view-content">
                <a href="#" class="popup-btn-close"><span class="flaticon-close"></span></a>
                <div class="product-items">
                    <div class="product-image">
                        <a href="#"><img src="images/popup-pro.jpg" alt="p1"></a>
                    </div>
                    <div class="product-info">
                        <div class="product-name"><a href="#">Photo Camera</a></div>
                        <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                        <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a>
                        <div class="product-infomation">
                            Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black and
                            Decker FireStorm line of 12V tools allowing...
                        </div>
                    </div>
                    <div class="product-info-price">
                        <span class="price">
                            <ins>$229.00</ins>
                            <del>$259.00</del>
                        </span>
                        <div class="quantity">
                            <h6 class="quantity-title">Quantity:</h6>
                            <div class="buttons-added">
                                <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <a href="#" class="btn-add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN -->
        <main class="site-main site-login">
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mã code</th>
                            <th scope="col">Phương thức thanh toán</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order_detail as $key => $value)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $value->code }}</td>
                            <td>
                                {{$value->payment_method}}
                            </td>
                            <td>
                                @if ($value->status==0)
                                <p><span class="w3-tag w3-teal" style="color: orange">Đang chờ</span></p>
                                @elseif($value->status == 1)
                                <p><span class="w3-tag w3-teal" style="color: lightpink">Đang vận chuyển</span></p>
                                @elseif($value->status == 2)
                                <p><span class="w3-tag w3-teal" style="color: green">Thành công</span></p>
                                @endif
                            </td>
                            <td>{{ number_format($value->total_price) }}&ensp;<u>đ</u></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main><!-- end MAIN -->

    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
    <!-- jQuery -->
</body>
@endsection
