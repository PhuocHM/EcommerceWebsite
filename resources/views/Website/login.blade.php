@extends('include.layout')
@section('title', 'Đăng nhập')
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
                <ol class="breadcrumb-page">
                    <li><a href="index.html">Home </a></li>
                    <li class="active"><a href="#">Login</a></li>
                </ol>
            </div>
            <div class="customer-login">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="title-login">Log in to your account</h5>
                            <p class="p-title-login">Wellcome to your account.</p>
                            <form class="login" method="post">
                                <p class="form-row form-row-wide">
                                    <label>Username or Email Address:<span class="required"></span></label>
                                    <input type="text" value="" name="username" placeholder="Type your username or email address" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Password:<span class="required"></span></label>
                                    <input type="password" name="password" placeholder="************" class="input-text">
                                </p>
                                <ul class="inline-block">
                                    <li><label class="inline"><input type="checkbox"><span class="input"></span>Remember me</label>
                                    </li>
                                </ul>
                                <a href="#" class="forgot-password">Forgotten password?</a>
                                <p class="form-row">
                                    <input type="submit" value="Login" name="Login" class="button-submit">
                                </p>
                            </form>
                        </div>
                        <div class="col-sm-6 border-after">
                            <h5 class="title-login">Great an account</h5>
                            <p class="p-title-login">Fersonal infomation</p>
                            <form class="register" method="post">
                                <p class="form-row form-row-wide col-md-6 padding-left">
                                    <label>First name<span class="required">*</span></label>
                                    <input type="text" value="" name="text" placeholder="First name" class="input-text">
                                </p>
                                <p class="form-row form-row-wide col-md-6 padding-right">
                                    <label>Middle Name/Initial<span class="required"></span></label>
                                    <input title="midname" type="text" value="" name="text" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Last name<span class="required">*</span></label>
                                    <input title="lastname" type="text" name="text" placeholder="Last name" class="input-text">
                                </p>
                                <p class="form-row form-row-wide">
                                    <label>Email Address<span class="required">*</span></label>
                                    <input title="email" type="email" name="email" placeholder="Email address" class="input-text">
                                </p>
                                <ul>
                                    <li><label class="inline"><input type="checkbox"><span class="input"></span>Sign Up for
                                            Newsletter</label></li>
                                </ul>
                                <h5 class="title-login title-login-bottom">Login Information</h5>
                                <p class="form-row form-row-wide col-md-6 padding-left">
                                    <label>Password:<span class="required"></span></label>
                                    <input title="pass" type="password" name="password" class="input-text">
                                </p>
                                <p class="form-row form-row-wide col-md-6 padding-right">
                                    <label>Confirm Password<span class="required">*</span></label>
                                    <input title="pass2" type="password" name="password" class="input-text">
                                </p>
                                <p class="form-row">
                                    <input type="submit" value="Submit" name="Submit" class="button-submit">
                                </p>
                            </form>
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
                            <img src="assets/images/item-instagram-1.jpg" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="assets/images/item-instagram-2.jpg" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="assets/images/item-instagram-3.jpg" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="assets/images/item-instagram-4.jpg" alt="img">
                        </a>
                        <span class="text">
                            <i class="icon fa fa-instagram" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="item-instagram">
                        <a href="#">
                            <img src="assets/images/item-instagram-5.jpg" alt="img">
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
                            <div class="logo-footer"><img src="assets/images/logo-light.png" alt="logo"></div>
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
                        <a href="#"><img src="assets/images/general/pay1.jpg" alt="pay1"></a>
                        <a href="#"><img src="assets/images/general/pay2.jpg" alt="pay2"></a>
                        <a href="#"><img src="assets/images/general/pay3.jpg" alt="pay3"></a>
                        <a href="#"><img src="assets/images/general/pay4.jpg" alt="pay4"></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end FOOTER -->
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
    <!-- jQuery -->
</body>
@endsection
