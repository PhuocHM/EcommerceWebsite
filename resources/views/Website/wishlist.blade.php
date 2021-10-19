@extends('include.layout')
@section('title', 'Danh sách mơ ước')
@section('main')
<body class="page-product">
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
        <!-- MAIN -->
        <main class="site-main shopping-cart">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.html">Home </a></li>
                    <li class="active"><a href="#">Wishlist</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-cart form-wishlist">
                            <div class="table-cart">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="tb-image"></th>
                                            <th class="tb-product">Product Name</th>
                                            <th class="tb-price">Unit Price</th>
                                            <th class="tb-qty">Qty</th>
                                            <th class="tb-add">Add To Cart</th>
                                            <th class="tb-remove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="tb-image"><a href="#" class="item-photo"><img src="{{asset('images/cart1.jpg')}}" alt="cart"></a></td>
                                            <td class="tb-product">
                                                <div class="product-name"><a href="#">Modern Watches</a></div>
                                            </td>
                                            <td class="tb-price">
                                                <span class="price">$229.00</span>
                                            </td>
                                            <td class="tb-qty">
                                                <div class="quantity">
                                                    <div class="buttons-added">
                                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-add">
                                                <button type="submit">
                                                    <span>Add To Cart</span>
                                                </button>
                                            </td>
                                            <td class="tb-remove">
                                                <a href="#" class="action-remove"><span><i class="flaticon-close" aria-hidden="true"></i></span></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="tb-image"><a href="#" class="item-photo"><img src="{{asset('images/cart2.jpg')}}" alt="cart"></a>
                                            <td class="tb-product">
                                                <div class="product-name"><a href="#">Photo Camera
                                                    </a></div>
                                            </td>
                                            <td class="tb-price">
                                                <span class="price">$229.00</span>
                                            </td>
                                            <td class="tb-qty">
                                                <div class="quantity">
                                                    <div class="buttons-added">
                                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-add">
                                                <button type="submit">
                                                    <span>Add To Cart</span>
                                                </button>
                                            </td>
                                            <td class="tb-remove">
                                                <a href="#" class="action-remove"><span><i class="flaticon-close" aria-hidden="true"></i></span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="yith_wcwl_wishlist_footer">
                                <!-- Sharing section -->
                                <div class="yith-wcwl-share">
                                    <h4 class="yith-wcwl-share-title">Share on:</h4>
                                    <ul>
                                        <li class="share-button">
                                            <a target="_blank" class="facebook" href="#" title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" class="twitter" href="https://twitter.com/share?url=https%3A%2F%2Ftechone.kutethemes.net%2Fwishlist%2Fview%2FI16LZO2GDEP9%2F&amp;text=" title="Twitter">
                                                <i class="fa fa-twitter"></i> </a>
                                        </li>
                                        <li class="share-button">
                                            <a target="_blank" class="pinterest" href="#" title="Pinterest">
                                                <i class="fa fa-pinterest"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
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
