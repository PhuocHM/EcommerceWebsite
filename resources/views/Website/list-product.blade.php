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
                    <li class="active"><a href="#">Grid Categorys </a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">
                            <div class="filter-options">
                                <div class="block-title">Shop by</div>
                                <div class="block-content">
                                    <div class="filter-options-item filter-categori">
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
                                    </div>
                                </div>
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
                                    <div class="modes">
                                        <a href="grid-product.html" class="active modes-mode mode-grid" title="Grid"><i class="fa fa-th-large"></i>
                                            <span>Grid</span>
                                        </a>
                                        <a href="list-product.html" title="List" class="modes-mode mode-list"><i class="fa fa-bars"></i>
                                            <span>List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="products products-list products-grid equal-container auto-clear">
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p8.jpg')}}" alt="p8"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Photo Camera
                                                </a></div>
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
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p9.jpg')}}" alt="p9"></a>
                                            </div>
                                            <span class="onnew">new</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Smartphone 4 GB</a></div>
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
                                            <div class="info-product">
                                                <p>Display Size: 6</p>
                                                <p>Display Type: Linux</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p10.jpg')}}" alt="p10"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Cellphone Factory</a></div>
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
                                            <div class="info-product">
                                                <p>Color: White</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p11.jpg')}}" alt="p11"></a>
                                            </div>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Modern Watches</a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p12.jpg')}}" alt="p12"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Ecase Leather
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p13.jpg')}}" alt="p13"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">External Enclosure
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p14.jpg')}}" alt="p14"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Smart Camera
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p15.jpg')}}" alt="p15"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Gaming Mouse
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p16.jpg')}}" alt="p16"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#"> Xphone Factory
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p17.jpg')}}" alt="p17"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Flat Wireless Game
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p18.jpg')}}" alt="p18"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Fly Camera
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset('images/product/p19.jpg')}}" alt="p19"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            <a href="#" class="quick-view">Quick View</a>
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">Extra Bass On
                                                </a></div>
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
                                            <div class="info-product">
                                                <p>Hight precision lens provided</p>
                                                <p>Android Supported</p>
                                                <p>Guarantee: 1 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <a href="#" class="btn-add-to-cart">Add to cart</a>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination">
                                <ul class="nav-links">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="back-next"><a href="#">Next</a></li>
                                </ul>
                                <span class="show-resuilt">Showing 1-8 of 12 result</span>
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
