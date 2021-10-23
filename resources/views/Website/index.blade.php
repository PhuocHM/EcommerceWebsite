@extends('include.layout')
@section('title', 'Trang chủ')
@section('main')
<body class="index-opt-5">
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

        <!-- MAIN -->
        <main class="site-main">
            <div class="block-slide">
                <div class="container">
                    <div class="main-slide slide-opt-3">
                        <div class="owl-carousel nav-style5" data-nav="false" data-autoplay="false" data-dots="true" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                            @foreach($products as $key => $product)
                            <div class="item-slide" style="background-image: url({{ $product->image }})">
                                <div class="slide-desc slide-desc-2">
                                    <div class="container-inner">
                                        <div class="p-primary">{{$product->name}}
                                        </div>
                                        <p>{{number_format($product->price)}}&ensp;VND</p>
                                        <a href="grid-product.html" class="btn-shop-now">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">
                        <a href="#" class="banner-img"><img src="{{asset('images/home3/banner1.jpg')}}" alt="banner1"></a>
                        <div class="promotion-banner-inner">
                            <h4>Trending Products</h4>
                            <h3>Smart Phone Collection</h3>
                            <a class="banner-link" href="{{ route('trending.index') }}">Shop now</a>
                        </div>
                    </div>
                    <div class="promotion-banner banner-slide style-4 hidden-sm hidden-xs">
                        <a href="#" class="banner-img"><img src="{{asset('images/home3/banner2-1.jpg')}}" alt="banner2"></a>
                        <div class="promotion-banner-inner">
                            <h4>Best Seller</h4>
                            <h3>Get Rewards Watches</h3>
                            <a class="banner-link" href="{{ route('bestseller.index') }}">Shop now</a>
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
                                        @foreach($categories as $key => $category)
                                        <li class="menu-item-has-children arrow item-megamenu">
                                            <a href="#">{{ $category['name'] }}</a>
                                            <span class="toggle-submenu hidden-md"></span>
                                            <div class="submenu parent-megamenu megamenu">
                                                <div class="row">
                                                    <div class="submenu-banner submenu-banner-menu-1">
                                                        <div class="col-md-4">
                                                            <div class="dropdown-menu-info">
                                                                <div class="dropdown-menu-content">
                                                                    <ul class="menu">
                                                                        @foreach($category['children'] as $key => $child)
                                                                        <li class="menu-item"><a href="#">{{$child['name']}}
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
                                    @foreach($latest_comments as $key => $comment)
                                    <div class="blog-item">
                                        <div class="post-thumb">
                                            <a href="#"><img src="{{asset($comment->image)}}" alt="blog"></a>
                                        </div>
                                        <div class="post-item-info">
                                            <h3 class="post-name"><a href="#">{{ $comment->name }}</a></h3>
                                            <div class="post-metas">
                                                <span class="author">Post by: <span>{{ $comment->user_name }}</span></span>
                                                <span class="comment"><i class="fas fa-star text-warning"></i>{{ $comment->star_value }}</span>
                                            </div>
                                            <div>
                                                {{$comment->content}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-8 site-main-main">
                            <div class="block-top-categori">
                                <div class="title-of-section">New Categories</div>
                                <div class="owl-carousel nav-style2" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"640":{"items":3},"768":{"items":2},"992":{"items":3},"1200":{"items":4}}'>
                                    @foreach($new_products as $key => $product)
                                    <div class="block-top-categori-item">
                                        <a href="#"><img src="{{asset($product->image)}}" alt="h3"></a>
                                        <div class="block-top-categori-title">{{ $product->name }}</div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="block-up-to">
                                <div class="up-to-content">Save up to 40%<span> all online store items.</span></div>
                                <a href="grid-product.html" class="shop-all">Shop all deals Now</a>
                            </div>
                            <div class="block-daily-deals style2">
                                <div class="title-of-section">
                                    Flash Sales
                                    <div class="product-count-down">
                                        <div class="kt-countdown is-countdown" data-y="2020" data-m="6" data-d="1" data-h="10" data-i="0" data-s="0">
                                            <span class="box-count day"><span class="number">01</span>
                                                <span class="text">Ngày</span></span><span class="dot">:</span>
                                            <span class="box-count hrs"><span class="number">00</span>
                                                <span class="text">Giờ</span></span><span class="dot">:</span>
                                            <span class="box-count min"><span class="number">00</span>
                                                <span class="text">Phút</span></span><span class="dot">:</span>
                                            <span class="box-count secs"><span class="number">00</span>
                                                <span class="text">Giây</span></span></div>
                                    </div>
                                </div>
                                <div class="block-daily-deals-content">
                                    <div class="owl-carousel nav-style2 equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"992":{"items":2}}'>
                                        <div class="deal-of-day equal-elem">
                                            <div class="product-thumb style1">
                                                <div class="thumb-inner">
                                                    <a href="#"><img src="{{asset('images/home3/d1.jpg')}}" alt="d1"></a>
                                                </div>
                                            </div>
                                            <div class="product-innfo">
                                                <div class="info-text">
                                                    <div class="product-name"><a href="#">Notebook Pro
                                                        </a></div>
                                                    <span class="price">

                                                        <ins>$229.00</ins>

                                                        <del>$259.00</del>

                                                        <span class="onsale">-50%</span>

                                                    </span>
                                                    <span class="star-rating">

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <span class="review">5 Review(s)</span>

                                                    </span>
                                                </div>
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="deal-of-day equal-elem">
                                            <div class="product-thumb style1">
                                                <div class="thumb-inner">
                                                    <a href="#"><img src="{{asset('images/home3/d2.jpg')}}" alt="d2"></a>
                                                </div>
                                            </div>
                                            <div class="product-innfo">
                                                <div class="info-text">
                                                    <div class="product-name"><a href="#">Smartwatch Seri
                                                        </a></div>
                                                    <span class="price">

                                                        <ins>$229.00</ins>

                                                        <del>$259.00</del>

                                                        <span class="onsale">-50%</span>

                                                    </span>
                                                    <span class="star-rating">

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <span class="review">5 Review(s)</span>

                                                    </span>
                                                </div>
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                            </div>
                                        </div>
                                        <div class="deal-of-day equal-elem">
                                            <div class="product-thumb style1">
                                                <div class="thumb-inner">
                                                    <a href="#"><img src="{{asset('images/home3/d2.jpg')}}" alt="d2"></a>
                                                </div>
                                            </div>
                                            <div class="product-innfo">
                                                <div class="info-text">
                                                    <div class="product-name"><a href="#">Cellphone Factory</a></div>
                                                    <span class="price">

                                                        <ins>$229.00</ins>

                                                        <del>$259.00</del>

                                                        <span class="onsale">-50%</span>

                                                    </span>
                                                    <span class="star-rating">

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <span class="review">5 Review(s)</span>

                                                    </span>
                                                </div>
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-feature-product small">
                                <div class="title-of-section">Rated Products</div>
                                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":2},"992":{"items":3},"1200":{"items":3}}'>
                                    @foreach($highest_star_products as $key => $list_products)
                                    <div class="owl-one-row">
                                        @foreach($list_products as $key => $product)
                                        <div class="product-item style1">
                                            <div class="product-inner equal-elem">
                                                <div class="product-thumb">
                                                    <div class="thumb-inner">
                                                        <a href="#"><img src="{{asset('images/home3/f1.jpg')}}" alt="f1"></a>
                                                    </div>
                                                    <a href="#" class="quick-view">Quick View</a>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="#">{{$product->name}}
                                                        </a></div>
                                                    <span class="price price-dark">

                                                        <ins>{{$product->price}}</ins>

                                                    </span>
                                                    <span class="star-rating">

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <i class="fa fa-star" aria-hidden="true"></i>

                                                        <span class="review">5 Review(s)</span>

                                                    </span>
                                                    <div class="group-btn-hover">
                                                        <div class="inner">
                                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i></a>
                                                            <a href="#" class="add-to-cart">Add to cart</a>
                                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
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
                            <div class="block-promotion-banner">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 padding-right-10">
                                        <div class="promotion-banner style-2">
                                            <a href="#" class="banner-img"><img src="{{asset('images/home3/banner5.jpg')}}" alt="banner5"></a>
                                            <div class="promotion-banner-inner">
                                                <h4>Laptop Collection</h4>
                                                <h3>Get <strong>25%</strong> Flat Off</h3>
                                                <a class="banner-link" href="grid-product.html">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 padding-left-10">
                                        <div class="promotion-banner style-2">
                                            <a href="#" class="banner-img"><img src="{{asset('images/home3/banner6.jpg')}}" alt="banner6"></a>
                                            <div class="promotion-banner-inner">
                                                <h4>Smart Watches Parts</h4>
                                                <h3>Sale Up To <strong>30%</strong> Off</h3>
                                                <a class="banner-link" href="grid-product.html">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-bestseller-product bestseller-opt-5">
                                <div class="title-of-section style2">Maybe you like</div>
                                <div class="owl-carousel nav-style2 equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="20" data-responsive='{"0":{"items":1},"480":{"items":2},"1000":{"items":2}}'>
                                    @foreach($random_products as $key => $list_products)
                                    <div class="owl-one-row">
                                        @foreach($list_products as $key => $product)
                                        <div class="product-item style2">
                                            <div class="product-inner equal-elem">
                                                <div class="product-thumb style1">
                                                    <div class="thumb-inner">
                                                        <a href="#"><img src="{{asset($product->image)}}" alt="b4"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="#">{{$product->name}}
                                                        </a></div>
                                                    <span class="price">
                                                        @if($product->discount&&$product->discount->first())
                                                        <ins>{{ number_format($product->price - $product->discount->first()->amounts)}}&ensp;<u>đ</u></ins>
                                                        <del>{{$product->price}}&ensp;<u>đ</u></del>
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
                                                    <a href="#" class="btn-add-to-cart">Add to cart</a>
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
        <footer class="site-footer footer-opt-2">
            <div class="footer-top full-width">
                <div class="owl-carousel instagram" data-nav="false" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":2},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":5}}'>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="{{asset('images/item-instagram-1.jpg')}}" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="{{asset('images/item-instagram-2.jpg')}}" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="{{asset('images/item-instagram-3.jpg')}}" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="{{asset('images/item-instagram-4.jpg')}}" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="{{asset('images/item-instagram-5.jpg')}}" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="footer-column equal-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 equal-elem">
                            <div class="logo-footer"><img src="{{asset('images/logo-light.png')}}" alt="logo"></div>
                            <div class="contacts">
                                <p class="contacts-info">Nullam tristique tortor nibh, in viverra libero sollicitudin ac.
                                    Suspendisse quis lacinia ipsum. Etiam scelerisque sit amet lectus quis lacinia. Sed.</p>
                                <span class="contacts-info info-address ">218 Fifth Avenue, HeavenTower NewYork City</span>
                                <span class="contacts-info info-phone">(+68) 123 456 7890</span>
                                <span class="contacts-info info-support">Hot-Support@Dagon.com</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 equal-elem">
                            <div class="links">
                                <h3 class="title-of-section">My account</h3>
                                <ul>
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 equal-elem">
                            <div class="links">
                                <h3 class="title-of-section">Information</h3>
                                <ul>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sellers</a></li>
                                    <li><a href="#">Our stores</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 equal-elem">
                            <div class="links">
                                <h3 class="title-of-section">Newsletter</h3>
                                <span class="span-newsletter">Get notified of new products, limited releases, and more.</span>
                                <div class="newsletter-form">
                                    <form id="newsletter-validate-detail" class="form subscribe">
                                        <div class="control">
                                            <input type="email" placeholder="Enter your email" id="newsletter" name="email" class="input-subscribe">
                                            <button type="submit" title="Subscribe" class="btn subscribe">
                                                <span>Sign Up</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="socials">
                                    <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="social"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright full-width">
                <div class="container">
                    <div class="copyright-right">
                        © Copyright 2020<span> Dagon</span>. All Rights Reserved.
                    </div>
                    <div class="pay-men">
                        <a href="#"><img src="{{asset('images/general/pay1.jpg')}}" alt="pay1"></a>
                        <a href="#"><img src="{{asset('images/general/pay2.jpg')}}" alt="pay2"></a>
                        <a href="#"><img src="{{asset('images/general/pay3.jpg')}}" alt="pay3"></a>
                        <a href="#"><img src="{{asset('images/general/pay4.jpg')}}" alt="pay4"></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end FOOTER -->
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
</body>
@endsection
