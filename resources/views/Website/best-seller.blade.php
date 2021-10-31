@extends('include.layout')
@section('title', 'Best Seller Product')
@section('main')

<body class="page-product grid-view">
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
                        <a href="#"><img src="{{asset('images/popup-pro.jpg')}}" alt="p1"></a>
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
        <main class="site-main product-list product-grid">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="{{ route('index') }}">Home </a></li>
                    <li class="active"><a href="#">Sản phẩm bán chạy nhất</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">

                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 float-none float-right">
                        <div class="main-content">
                            <div class="promotion-banner style-3">
                                <a href="#" class="banner-img"><img src="{{asset('images/product/banner-product.jpg')}}" alt="banner-product"></a>
                                <div class="promotion-banner-inner">
                                    <h4>Người tiêu dùng lựa chọn</h4>
                                    <h3>Sản phẩm có doanh thu cao nhất tháng</h3>
                                    <a class="banner-link" href="#">Mua ngay</a>
                                </div>
                            </div>
                            <div class="toolbar-products">
                                <h4 class="title-product">Danh sách sản phẩm</h4>
                                <div class="toolbar-option">


                                </div>
                            </div>
                            <div class="products products-list products-grid equal-container auto-clear">
                                @foreach($best_seller_product as $key => $product)
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset($product->cover2Image->first()->image)}}" alt="p8"></a>
                                            </div>
                                            @if ($product->discount && $product->discount->first())
                                            <span class="onsale">-{{number_format($product->discount->first()->amounts ) }}&ensp;VND</span>
                                            @endif
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="{{ route('product-detail.show',$product->id) }}">{{$product->name}}
                                                </a></div>
                                            <span class="price">

                                                @if ($product->discount && $product->discount->first())
                                                <ins>{{ number_format($product->price - $product->discount->first()->amounts) }}&ensp;<u>đ</u></ins>
                                                <del>{{ number_format($product->price )}}&ensp;<u>đ</u></del>
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
                                            <div class="info-product">
                                                <p>Weigh: 8.25 kg</p>
                                                <p>Size: One Size Fits All </p>
                                                <p>Guarantee: 2 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <button type="button" onclick="addToCart({{ $product->id }})" class="btn-add-to-cart">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="pagination">
                                {{ $best_seller_product->links() }}
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
