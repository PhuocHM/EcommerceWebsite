@extends('include.layout')
@section('title', 'Chi tiết')
@section('main')
<body class="page-product detail-product">
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
                    <li><a href="index.html">Home </a></li>
                    <li class="active"><a href="#">Detail</a></li>
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
                                        <span class="label-stock">Availability: </span>In Stock
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
                                        </div>
                                        <div class="single-add-to-cart">
                                            <button onclick="addToCart2()" id="submit-button" type="button" class="btn-add-to-cart">Thêm vào giỏ hàng</button>
                                            <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                            <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="group-btn-share">
                                    <a href="#"><img src="{{asset('images/detail/btn1.png')}}" alt="btn1"></a>
                                    <a href="#"><img src="{{asset('images/detail/btn2.png')}}" alt="btn1"></a>
                                    <a href="#"><img src="{{asset('images/detail/btn3.png')}}" alt="btn1"></a>
                                    <a href="#"><img src="{{asset('images/detail/btn4.png')}}" alt="btn1"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-details-product">
                    <ul class="box-tab nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
                    </ul>
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <div class="box-content">
                                <p>Lorem ipsum dolor sit amet, an munere tibique consequat mel, congue albucius no qui,
                                    at
                                    everti meliore erroribus sea. Vero graeco cotidieque ea duo, in eirmod insolens
                                    interpretaris nam. Pro at nostrud percipit definitiones, eu tale porro cum. Sea ne
                                    accusata voluptatibus. Ne cum falli dolor voluptua, duo ei sonet choro facilisis,
                                    labores officiis torquatos cum ei.</p>
                                <p>Cum altera mandamus in, mea verear disputationi et. Vel regione discere ut, legere
                                    expetenda ut eos. In nam nibh invenire similique. Atqui mollis ea his, ius graecis
                                    accommodare te. No eam tota nostrum cotidieque. Est cu nibh clita. Sed an nominavi,
                                    et
                                    duo corrumpit constituto, duo id rebum lucilius. Te eam iisque deseruisse, ipsum
                                    euismod
                                    his at. Eu putent habemus voluptua sit, sit cu rationibus scripserit, modus
                                    voluptaria
                                    ex per. Aeque dicam consulatu eu his, probatus neglegentur disputationi sit et. Ei
                                    nec
                                    ludus epicuri petentium, vis appetere maluisset ad. Et hinc exerci utinam cum. Sonet
                                    saperet nominavi est at, vel eu sumo tritani. Cum ex minim legere.</p>
                                <p>Eos cu utroque inermis invenire, eu pri alterum antiopam. Nisl erroribus definitiones
                                    nec
                                    an, ne mutat scripserit est. Eros veri ad pri. An soleat maluisset per. Has eu idque
                                    similique, et blandit scriptorem necessitatibus mea. Vis quaeque ocurreret ea.cu bus
                                    scripserit, modus voluptaria ex per. Aeque dicam consulatu eu his, probatus neentur
                                    disputationi sit et. Ei nec ludus epicuri petentium, vis appetere maluisset ad. Et
                                    hinc
                                    exerci utinam cum. Sonet saperet nominavi est at, vel eu sumo tritani.</p>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <div class="box-content">
                                <p>ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nulla ullamcorper,
                                    interdum dolor vel, dictum justo. Vivamus finibus lorem id auctor
                                    placerat. Ut fermentum nulla lectus, in laoreet metus ultrices ac. Integer eleifend
                                    urna
                                    ultricies enim facilisis, vel fermentum eros porta.
                                </p>
                                <span>Weights & Dimensions</span>
                                <div class="parameter">
                                    <p>Overall: 40" H x 35.5" L x 35.5" W</p>
                                    <p>Bar height:40"</p>
                                    <p>Overall Product Weight: 88 lbs</p>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-panel">
                            <div class="box-content">
                                <form method="post" action="#" class="new-review-form">
                                    <a href="#" class="form-title">Write a review</a>
                                    <div class="form-content">
                                        <p class="form-row form-row-wide">
                                            <label>Name</label>
                                            <input type="text" value="" name="text" placeholder="Enter your name" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Email</label>
                                            <input type="text" name="text" placeholder="admin@example.com" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Review Title<span class="required">*</span></label>
                                            <input type="email" name="email" placeholder="Give your review a title" class="input-text">
                                        </p>
                                        <p class="form-row form-row-wide">
                                            <label>Body of Review (1500)</label>
                                            <textarea title="message" aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>
                                        </p>
                                        <p class="form-row">
                                            <input type="submit" value="Submit Review" name="Submit" class="button-submit">
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-recent-view single">
                <div class="container">
                    <div class="title-of-section">You may be also interested</div>
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
                                    <a href="#" class="quick-view">Quick View</a>
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
                                <p class="contacts-info">Nullam tristique tortor nibh, in viverra libero sollicitudin
                                    ac.
                                    Suspendisse quis lacinia ipsum. Etiam scelerisque sit amet lectus quis lacinia. Sed.
                                </p>
                                <span class="contacts-info info-address ">218 Fifth Avenue, HeavenTower NewYork
                                    City</span>
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
                                <span class="span-newsletter">Get notified of new products, limited releases, and
                                    more.</span>
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
    function addToCart2() {
        let url = `{{ route('cart.addToCart') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , data: $('#cart-form').serialize()
            , success: function(response) {
                if (response.success) {
                    console.log('Đã thêm vào giỏ hàng thành công !')
                } else {
                    console.log('Errror !')
                }
            }
            , error: function(error) {
                console.log(error)
            }
        });
    }

</script>
@endsection
