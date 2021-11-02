@extends('include.layout')
@section('title', 'Chi tiết sản phẩm')
@section('main')
<body class="page-product detail-product">
    <div style="display:none;">
        <button id="noti-button-2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                <div class="modal-body" id="noti-main-2">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tiếp tục mua hàng</button>
                    <button type="button" class="btn btn-success"><a style="color:white;text-decoration: none" href="{{ route('cart.index') }}">Xem giỏ hàng</a></button>
                </div>
            </div>
        </div>
    </div>
    {{-- --}}
    <div style="display:none;">
        <button id="noti-button-3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
            Launch demo modal
        </button>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="noti-main-3">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>
                </div>
            </div>
        </div>
    </div>
    {{-- --}}
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
        {{-- Hiển thị modal sản phẩm --}}
        <div id="block-quick-view-popup" class="block-quick-view-popup">
            <div class="quick-view-content">
                <a href="#" class="popup-btn-close"><i class="fas fa-times"></i></a>
                <div class="product-items">
                    <div class="product-image">
                        <a href="#"><img src="{{asset('images/popup-pro.jpg')}}" alt="p1"></a>
                    </div>
                    <div class="product-info">
                        <div class="product-name"><a href="#">photo Camera</a></div>
                        <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                        <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to
                            Wishlist</a>
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
                        <a href="#" class="btn-add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <main class="site-main">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="{{ route('index') }}">Trang chủ </a></li>
                    <li class="active"><a href="#">{{ $detail_products->name }}</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="product-content-single">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 padding-right">
                            <div class="product-media">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img id="img_zoom" data-zoom-image="{{asset($detail_products->cover2Image->first()->image)}}" src="{{asset($detail_products->cover2Image->first()->image)}}" alt="">
                                    <a href="#" class="btn-zoom open_qv"><i class="flaticon-magnifying-glass" aria-hidden="true"></i></a>
                                </div>
                                <div class="product-preview image-small product_preview">
                                    <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                        <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">
                                            <img src="{{asset('images/detail/i1.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">
                                        </a>
                                        <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">
                                            <img src="{{asset('images/detail/i2.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">
                                        </a>
                                        <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">
                                            <img src="{{asset('images/detail/i11.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">
                                        </a>
                                        <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">
                                            <img src="{{asset('images/detail/i12.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">
                                        </a>
                                        <a href="#" data-image="images/detail/thick-box-1.jpg" data-zoom-image="{{asset('images/detail/thick-box-1.jpg')}}">
                                            <img src="{{asset('images/detail/i13.jpg')}}" data-large-image="{{asset('images/detail/thick-box-1.jpg')}}" alt="i1">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="product-info-main">
                                <div class="product-name"><a href="#">{{ $detail_products->name }}</a></div>
                                <span class="star-rating">

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <span class="review">5 Review(s)</span>

                                </span>
                                <div class="product-info-stock-sku">
                                    <div class="stock available">
                                        <span class="label-stock">Tình trạng : </span>
                                        @if($availability != null)
                                        <span style="color:green">Còn hàng</span>
                                        @else
                                        Hết hàng
                                        @endif
                                    </div>
                                </div>
                                <div class="product-infomation">
                                    {{ $detail_products->description }}
                                </div>
                                <div class="product-info-price">
                                    <span class="price">
                                        @if(!isset($detail_products->discount->first()->amounts))
                                        <ins>{{ number_format($detail_products->price )}}&ensp;VND</ins>
                                        @else
                                        <ins>{{ number_format($detail_products->price - $detail_products->discount->first()->amounts )}}&ensp;VND</ins>
                                        <del>{{ number_format($detail_products->price )}}&ensp;VND</del>
                                        @endif
                                    </span>
                                    <form action="GET" id="cart-form">
                                        <div class="quantity">
                                            <h6 class="quantity-title">Số lượng:</h6>
                                            <div class="buttons-added">
                                                <input name="product_quantity" type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                            </div>
                                            <input type="hidden" name="product_id" value="{{$detail_products->id}}">
                                        </div>
                                        <div class="single-add-to-cart">
                                            @if($availability != null)
                                            <button onclick="addToCart2()" id="submit-button" type="button" class="btn-add-to-cart">Thêm vào giỏ hàng</button>
                                            @else
                                            <button disabled id="submit-button" type="button" class="btn-add-to-cart">Hiện đang hết hàng</button>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-details-product">
                    <ul class="box-tab nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Thông tin</a></li>
                        @if (Auth::check())
                        <li><a data-toggle="tab" href="#tab-3">Nhận xét</a></li>
                        @endif
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                @if($detail_products->attribute != null)
                                @foreach($detail_products->attribute as $key => $attribute)
                                <span>{{ $attribute->name }}:{{ $attribute->pivot->content }}</span>
                                <br>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div id="tab-3" class="tab-panel">
                            <div class="box-content">
                                <form method="post" action="#" class="new-review-form" id="review_form">
                                    <a href="#" class="form-title">Đánh giá</a>
                                    <div class="form-content">
                                        <p class="form-row form-row-wide" id="rating">
                                            <input type="radio" id="star5" name="star_input" value="5" />
                                            <label class="full" for="star5" title="Rất tốt - 5 sao"></label>

                                            <input type="radio" id="star4" name="star_input" value="4" />
                                            <label class="full" for="star4" title="Khá tốt - 4 sao"></label>

                                            <input type="radio" id="star3" name="star_input" value="3" />
                                            <label class="full" for="star3" title="Bình thường - 3 sao"></label>

                                            <input type="radio" id="star2" name="star_input" value="2" />
                                            <label class="full" for="star2" title="Khá tệ - 2 sao"></label>

                                            <input type="radio" id="star1" name="star_input" value="1" />
                                            <label class="full" for="star1" title="Tệ - 1 sao"></label>
                                        </p>
                                        <p class="form-row form-row-wide" style="clear:left">
                                            <label>Viết nhận xét của bạn</label>
                                            <input type="hidden" id="id_product" name="id_product" value="{{$detail_products->id}}">
                                            <div style="width:70%">
                                                <input id="comment_input" type="text" name="comment_input" placeholder="Ghi nhận xét của bạn" class="input-text">
                                            </div>
                                        </p>
                                        <button id="comment_button" type="button" class="btn btn-danger">Lưu</button>
                                    </div>
                                </form>
                            </div>
                            <div style="margin-top: 20px" id="comment_area">
                                @foreach($detail_products->comment as $key => $value)
                                <span><b>{{ $value->user->name }}</b> đã đánh giá {{ $value->star_value }}&ensp;<i class="fas fa-star" style="color:orange"></i>: {{ $value->content }} </span><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-recent-view single">
                <div class="container">
                    <div class="title-of-section">Đề xuất</div>
                    <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'>
                        @foreach($related_items as $key => $product)
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href="#"><img src="{{asset($product->cover2Image->first()->image)}}" alt="r1"></a>
                                    </div>
                                    @if ($product->discount && $product->discount->first())
                                    <span class="onsale">-{{number_format($product->discount->first()->amounts ) }}&ensp;VND</span>
                                    @endif
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">Modern Watches</a></div>
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
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                        <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                        <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
    function addToCart2() {
        let url = `{{ route('cart.addToCart') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , data: $('#cart-form').serialize()
            , success: function(response) {
                if (response.success) {
                    $("#noti-main-2").html('Đã thêm ' + response.success.name + ' vào giỏ hàng !')
                    $("#noti-button-2").trigger("click");
                    checkCart();
                } else if (response.error) {
                    $("#error_login_button").trigger("click");
                }
            }
            , error: function(error) {
                console.log(error)
            }
        });
    }
    $("#comment_button").click(function() {
        let url = `{{ route('home.addComment') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , data: $('#review_form').serialize()
            , success: function(response) {
                if (response.success) {
                    $("#noti-main-3").html('Cám ơn bạn đã nhận xét về sản phẩm này !')
                    $("#noti-button-3").trigger("click");
                    $("#comment_area").append(
                        `
                        <span><b>You</b> đã đánh giá ` + $('input[name="star_input"]:checked').val() + `&ensp;<i class="fas fa-star" style="color:orange"></i>: ` + $("#comment_input").val() + ` </span><br>
                        `
                    )
                } else {
                    console.log('Errror !')
                }
            }
            , error: function(error) {
                console.log(error)
            }
        });
    })

</script>
@endsection
