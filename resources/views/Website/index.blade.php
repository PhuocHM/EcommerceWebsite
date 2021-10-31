@extends('include.layout')
@section('title', 'Trang chủ')
@section('main')

<body class="index-opt-5">
    <div style="display:none;">
        <button id="noti-button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="noti-main">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tiếp tục mua hàng</button>
                </div>
            </div>
        </div>
    </div>
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
                <a href="#" class="popup-btn-close"><i class="fas fa-times"></i></a>
                <div class="product-items">
                    <div class="product-image">
                        <a href="#"><img src="{{ asset('images/popup-pro.jpg') }}" alt="p1"></a>
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
                        {{-- <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a> --}}
                        <div class="product-infomation">
                            Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black
                            and
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
                        <a href="#" class="btn-add-to-cart">Thêm vào giỏ</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN -->
        <main class="site-main">
            <div class="block-slide">
                <div class="container">
                    <div class="main-slide slide-opt-3">
                        <div class="owl-carousel nav-style5" data-nav="false" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                            @foreach ($products as $key => $product)
                            <div class="item-slide" style="background-image: url({{ $product->image }})">
                                <div class="slide-desc slide-desc-2">
                                    <div class="container-inner">
                                        <div class="p-primary">{{ $product->name }}
                                        </div>
                                        <p>{{ number_format($product->price) }}&ensp;VND</p>
                                        <a href="{{ route('product-detail.show',$product->id) }}" class="btn-shop-now">Mua ngay</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">
                        <a href="#" class="banner-img"><img src="{{ asset('images/home3/banner1.jpg') }}" alt="banner1"></a>
                        <div class="promotion-banner-inner">
                            <h4>Xu hướng sản phẩm</h4>
                            <h3>Sản phẩm nhiều đánh giá nhất</h3>
                            <a class="banner-link" href="{{ route('trending.index') }}">Mua ngay</a>
                        </div>
                    </div>
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">
                        <a href="#" class="banner-img"><img src="{{ asset('images/home3/banner2-1.jpg') }}" alt="banner2"></a>
                        <div class="promotion-banner-inner">
                            <h4>Sản phẩm bán chạy</h4>
                            <h3>Tháng 10</h3>
                            <a class="banner-link" href="{{ route('bestseller.index') }}">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 site-main-sidebar clearfix">
                            <div id="box-vertical-megamenus" class="box-vertical-megamenus style2">
                                <h4 class="title active">
                                    <span class="btn-open-mobile home-page">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="title-menu">Danh mục sản phẩm</span>
                                </h4>
                                <div class="vertical-menu-content">
                                    <span class="btn-close hidden-md"><i class="flaticon-close" aria-hidden="true"></i></span>
                                    <ul class="vertical-menu-list">
                                        @foreach ($categories as $key => $category)
                                        <li class="menu-item-has-children arrow item-megamenu">
                                            <a href="#">{{ $category['name'] }}</a>
                                            <span class="toggle-submenu hidden-md"></span>
                                            <div class="submenu parent-megamenu " style="min-height: 250px">
                                                <div class="row">
                                                    <div class="submenu-banner submenu-banner-menu-1">
                                                        <div class="col-md-4">
                                                            <div class="dropdown-menu-info">
                                                                <div class="dropdown-menu-content">
                                                                    <ul class="menu">
                                                                        @foreach ($category['children'] as $key => $child)
                                                                        <li class="menu-item"><a href="{{ route('category.show',$child['id']) }}">{{ $child['name'] }}
                                                                            </a></li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="dagon-iconbox">
                                <div class="iconbox-inner">
                                    <div class="icon"><span class="flaticon-delivery-truck"></span></div>
                                    <div class="content">
                                        <h4 class="title">CHUYỂN PHÁT NHANH</h4>
                                        <p class="text">Cam kết chuyển phát trong 1 tuần</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dagon-iconbox">
                                <div class="iconbox-inner">
                                    <div class="icon"><span class="flaticon-refresh"></span></div>
                                    <div class="content">
                                        <h4 class="title">30 NGÀY ĐỔI TRẢ</h4>
                                        <p class="text">Thoải mái trải nghiệm sản phẩm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="dagon-iconbox last">
                                <div class="iconbox-inner">
                                    <div class="icon"><span class="flaticon-quality-badge"></span></div>
                                    <div class="content">
                                        <h4 class="title">CHẤT LƯỢNG TỐT NHẤT</h4>
                                        <p class="text">Ở nhà có thể mua mọi thứ</p>
                                    </div>
                                </div>
                            </div>

                            <div class="block-the-blog sb">
                                <div class="title-of-section">Bình luận mới nhất</div>
                                <div class="owl-carousel nav-style2" data-nav="false" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":2},"768":{"items":1}}'>
                                    @foreach ($latest_comments as $key => $comment)
                                    <div class="blog-item">
                                        <div class="post-thumb">
                                            <a href="{{ route('product-detail.show',$comment->product_id) }}"><img src="{{ asset($comment->image) }}" alt="blog"></a>
                                        </div>
                                        <div class="post-item-info">
                                            <h3 class="post-name"><a href="{{ route('product-detail.show',$comment->product_id) }}">{{ $comment->name }}</a></h3>
                                            <div class="post-metas">
                                                <span class="author">Post by:
                                                    <span>{{ $comment->user_name }}</span></span>
                                                <span class="comment"><i class="fas fa-star" style="color:orange"></i>{{ $comment->star_value }}</span>
                                            </div>
                                            <div>
                                                {{ $comment->content }}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 site-main-main">
                            <div class="block-top-categori">
                                <div class="title-of-section">Sản phẩm mới nhất</div>
                                <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"640":{"items":3},"768":{"items":2},"992":{"items":3},"1200":{"items":4}}'>
                                    @foreach ($new_products as $key => $product)
                                    <div class="block-top-categori-item">
                                        <a href="{{ route('product-detail.show', $product->id) }}"><img src="{{ asset($product->image) }}" alt="h3"></a>
                                        <div class="block-top-categori-title">
                                            <a href="{{ route('product-detail.show', $product->id) }}">{{ $product->name }}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="block-daily-deals style2">
                                <div class="title-of-section">
                                    Flash Sales
                                    <div id="product-count-down" class="product-count-down">
                                        <div class="kt-countdown is-countdown" data-y="2020" data-m="6" data-d="1" data-h="10" data-i="0" data-s="0">
                                            <span class="box-count day"><span class="number">01</span>
                                                <span class="text">Ngày</span></span><span class="dot">:</span>
                                            <span class="box-count hrs"><span class="number">00</span>
                                                <span class="text">Giờ</span></span><span class="dot">:</span>
                                            <span class="box-count min"><span class="number">00</span>
                                                <span class="text">Phút</span></span><span class="dot">:</span>
                                            <span class="box-count secs"><span class="number">00</span>
                                                <span class="text">Giây</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-daily-deals-content" id="flash-sale-main">
                                    <div class="owl-carousel nav-style2 equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"992":{"items":2}}'>
                                        @foreach ($sales_items as $sales_item)
                                        @if (isset($sales_item['discount'][0]['amounts']))
                                        <div class="deal-of-day equal-elem">
                                            <div class="product-thumb style1">
                                                <div class="thumb-inner">
                                                    <a href="#"><img src="{{ asset($sales_item['cover2_image'][0]['image']) }}" alt="d2"></a>
                                                </div>
                                            </div>
                                            <div class="product-innfo">
                                                <div class="info-text">
                                                    <div class="product-name"><a href="{{ route('product-detail.show', $sales_item['id']) }}">{{ $sales_item['name'] }}
                                                        </a></div>
                                                    <span class="price">
                                                        <ins>{{ number_format($sales_item['price'] - $sales_item['discount'][0]['amounts']) }}</ins>
                                                        <del>{{ number_format($sales_item['price']) }}</del>
                                                    </span>
                                                    <span class="star-rating">
                                                        @for ($i = 0; $i < $sales_item['rate']; $i++) <i class="fa fa-star" aria-hidden="true"></i>
                                                            @endfor
                                                    </span>
                                                </div>
                                                <button onclick="addToCart({{ $sales_item['id'] }})" class="btn-add-to-cart">Thêm vào giỏ</a>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="block-feature-product small">
                                <div class="title-of-section">Sản phẩm có đánh giá cao</div>
                                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":2},"992":{"items":3},"1200":{"items":3}}'>
                                    @foreach ($highest_star_products as $key => $list_products)
                                    <div class="owl-one-row">
                                        @foreach ($list_products as $key => $product)
                                        <div class="product-item style1">
                                            <div class="product-inner equal-elem">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href="{{ route('product-detail.show',$product->product_id) }}"><img src="{{ asset($product->coverImage->first()->image) }}" alt="f1"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="{{ route('product-detail.show',$product->product_id) }}">{{ $product->name }}
                                                        </a></div>
                                                    <span class="price price-dark">

                                                        <ins style="color:red">{{ number_format($product->price)}}&ensp;<u>đ</u></ins>

                                                    </span>
                                                    <span class="star-rating">

                                                        @for ($i = 0; $i < $product->avg_star_value; $i++)
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            @endfor

                                                    </span>
                                                    <div class="group-btn-hover">
                                                        <div class="inner">
                                                            {{-- <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a> --}}
                                                            <button type="button" class="add-to-cart" onclick="addToCart({{ $product->product_id }});">Thêm vào giỏ</button>
                                                            {{-- <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            <div class="block-bestseller-product bestseller-opt-5">
                                <div class="title-of-section style2">Có thể bạn sẽ thích</div>
                                <div class="owl-carousel nav-style2 equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"1000":{"items":2}}'>
                                    @foreach ($random_products as $key => $list_products)
                                    <div class="owl-one-row">
                                        @foreach ($list_products as $key => $product)
                                        <div class="product-item style2">
                                            <div class="product-inner equal-elem">
                                                <div class="product-thumb style1">
                                                    <div class="thumb-inner">
                                                        <a href="{{ route('product-detail.show', $product->id) }}"><img src="{{ asset($product->image) }}" alt="b4"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="{{ route('product-detail.show', $product->id) }}">{{ $product->name }}
                                                        </a></div>
                                                    <span class="price">
                                                        @if ($product->discount && $product->discount->first())
                                                        <ins>{{ number_format($product->price - $product->discount->first()->amounts) }}&ensp;<u>đ</u></ins>
                                                        <del>{{ $product->price }}&ensp;<u>đ</u></del>
                                                        @else
                                                        <ins>{{ number_format($product->price) }}&ensp;<u>đ</u></ins>
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
                                                    <button type="button" onclick="addToCart({{ $product->product_id }})" class="btn-add-to-cart">Thêm vào giỏ</button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->
        @include('include.footer')
        <!-- end FOOTER -->
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
</body>
@endsection
@section('script')
<script>
    function deleteDiscount() {
        var url = `{{ route('discount.deleteDiscount') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , success: function(response) {
                // 
            }
        })
    }

    function getFlashSales() {
        var url = `{{ route('discounts.getFlashSale') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , success: function(response) {
                if (response.success) {

                    var x = setInterval(function() {
                        var now = new Date().getTime();
                        var countDownDate = new Date(response.success.expired_date).getTime();
                        var distance = countDownDate - now;
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        $("#product-count-down").html(`
                            <div class="kt-countdown is-countdown" data-y="2020" data-m="6" data-d="1" data-h="10" data-i="0" data-s="0">
                                            <span class="box-count day"><span class="number">` + days + `</span>
                                                <span class="text">Ngày</span></span><span class="dot">:</span>
                                            <span class="box-count hrs"><span class="number">` + hours + `</span>
                                                <span class="text">Giờ</span></span><span class="dot">:</span>
                                            <span class="box-count min"><span class="number">` + minutes + `</span>
                                                <span class="text">Phút</span></span><span class="dot">:</span>
                                            <span class="box-count secs"><span class="number">` + seconds + `</span>
                                                <span class="text">Giây</span></span>
                                        </div>

                            `);
                        if (distance < 0) {
                            clearInterval(x);
                            deleteDiscount();
                            $("#noti-main").html('Chương trình Flash Sales đã kết thúc, giá sản phẩm đã được cập nhật lại')
                            checkCart();
                            $("#noti-button").trigger("click");
                            $("#product-count-down").html("<p>Không có chương trình khuyến mãi nào</p>");
                            $("#flash-sale-main").html('')
                        }
                    }, 1000);

                } else {
                    $("#product-count-down").html("<p>Không có chương trình khuyến mãi nào</p>");
                    $("#flash-sale-main").html('')
                }
            }
        })
    }

    $(document).ready(function() {
        getFlashSales();
    });

</script>
@endsection
