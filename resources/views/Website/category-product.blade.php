@extends('include.layout')
@section('title', 'Danh mục')
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
                    <li><a href="index.html">Home </a></li>
                    <li class="active"><a href="#">Danh sách sản phẩm </a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">
                            <div class="filter-options">
                                <div class="block-title">Shop by</div>
                                @foreach($attributes as $key => $attribute)
                                <div class="block-content">
                                    <div class="filter-options-item filter-categori">
                                        <div class="filter-options-title">{{ $attribute->name }}</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                @foreach($attribute->product as $key => $value)
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>{{ $value->pivot->content }}
                                                    </label></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div class="filter-options-item filter-categori">
                                        <div class="filter-options-title">Categories</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Smartphone
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Computer
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Body
                                                        Parts
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Printers
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Repair
                                                        Partss</label>
                                                </li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Camera
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Monitors
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Office
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Tablets
                                                    </label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-options-item filter-brand">
                                        <div class="filter-options-title">Brand</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Networking</label>
                                                </li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Projector</label>
                                                </li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Bentley
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Honda
                                                    </label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Mercedes
                                                    </label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-options-item filter-price">
                                        <div class="filter-options-title">Price</div>
                                        <div class="filter-options-content">
                                            <div class="price_slider_wrapper">
                                                <div data-label-reasult="Price:" data-min="0" data-max="3000" data-unit="$" class="slider-range-price " data-value-min="85" data-value-max="2000">
                                                    <span class="text-right">Filter</span>
                                                </div>
                                                <div class="price_slider_amount">
                                                    <div class="price_label">
                                                        Price: <span class="from">$85</span>-<span class="to">$2000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter-options-item filter-size">
                                        <div class="filter-options-title">Size</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                <li><label class="inline"><input type="checkbox"><span class="input">S</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input">M</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input">L</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input">XL</span></label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="filter-options-item filter-color">
                                        <div class="filter-options-title">Color</div>
                                        <div class="filter-options-content">
                                            <ul>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Red<span class="value">(217)</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Black<span class="value">(79)</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Grey<span class="value">(116)</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>While<span class="value">(38)</span></label></li>
                                            </ul>
                                            <ul>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Yellow<span class="value">(179)</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Blue<span class="value">(283)</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Pink<span class="value">(29)</span></label></li>
                                                <li><label class="inline"><input type="checkbox"><span class="input"></span>Green<span class="value">(205)</span></label></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                {{-- </div> --}}
                            </div>
                            <div class="block-banner-sidebar">
                                <a href="#"><img src="{{asset('images/product/banner-sidebar.jpg')}}" alt="banner-sidebar"></a>
                                <div class="promotion-banner-inner">
                                    <h4>Fly Drone</h4>
                                    <h3>Tincidunt interdum senectus fames sociis sem platea </h3>
                                    <a class="banner-link" href="grid-product.html">Shop now</a>
                                </div>
                            </div>
                            <div class="block-latest-roducts">
                                <div class="block-title">Latest Products</div>
                                <div class="block-latest-roducts-content">
                                    <div class="owl-carousel nav-style2" data-nav="false" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"600":{"items":1},"1000":{"items":1}}'>
                                        <div class="owl-ones-row">
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p1.jpg')}}" alt="p1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Homasy Portable</a></div>
                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

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
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p2.jpg')}}" alt="p2"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Lexani Forged</a>
                                                        </div>
                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

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
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p3.jpg')}}" alt="p3"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Custom Laptop
                                                            </a></div>
                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

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
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p4.jpg')}}" alt="p4"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Pocket RC Drone </a>
                                                        </div>
                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-ones-row">
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p1.jpg')}}" alt="p1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Homasy Portable</a></div>
                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

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
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p2.jpg')}}" alt="p2"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Lexani Forged</a>
                                                        </div>
                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

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
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p3.jpg')}}" alt="p3"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Custom Laptop
                                                            </a></div>
                                                        <span class="price price-dark">

                                                            <ins>$229.00</ins>

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
                                                </div>
                                            </div>
                                            <div class="product-item style1">
                                                <div class="product-inner">
                                                    <div class="product-thumb">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{asset('images/blog/p4.jpg')}}" alt="p4"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">Pocket RC Drone </a>
                                                        </div>
                                                        <span class="price">

                                                            <ins>$229.00</ins>

                                                            <del>$259.00</del>

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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 float-none float-right">
                        <div class="main-content">
                            <div class="promotion-banner style-3">
                                <a href="#" class="banner-img"><img src="{{asset('images/product/banner-product.jpg')}}" alt="banner-product"></a>
                                <div class="promotion-banner-inner">
                                    <h4>Top Staff Pick</h4>
                                    <h3>Best Watches Collection</h3>
                                    <a class="banner-link" href="grid-product.html">Shop now</a>
                                </div>
                            </div>
                            <div class="toolbar-products">
                                <h4 class="title-product">Grid Category</h4>
                                <div class="toolbar-option">
                                    <div class="toolbar-sort">
                                        <select title="sort" class="chosen-select sorter-options form-control">
                                            <option selected="selected" value="position">Sort by popularity</option>
                                            <option value="name">Name</option>
                                            <option value="price">Price</option>
                                        </select>
                                    </div>
                                    <div class="toolbar-per">
                                        <select title="limit" class="chosen-select limiter-options form-control">
                                            <option selected="selected" value="6">20 per page</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="products products-list products-grid equal-container auto-clear">
                                {{-- {{dd($category_products->first())}} --}}
                                @if($category_products->first() == null)
                                <span style="color:red;">Không có sản phẩm nào</span>
                                @else
                                @foreach($category_products as $key => $product)
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset($product->cover2Image->first()->image)}}" alt="p8"></a>
                                            </div>
                                            @if ($product->discount && $product->discount->first())
                                            <span class="onsale">-{{number_format($product->discount->first()->amounts ) }}&ensp;VND</span>
                                            @endif
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">{{$product->name}}
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
                                            <div class="info-product">
                                                <p>Weigh: 8.25 kg</p>
                                                <p>Size: One Size Fits All </p>
                                                <p>Guarantee: 2 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="pagination d-flex justify-content-end">
                                {{ $category_products->links() }}
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
@section('script')
<script>

</script>
@endsection
