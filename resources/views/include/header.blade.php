<!-- HEADER -->
<header class="site-header header-opt-1">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- hotline -->
            <ul class="nav-top-left">
                <li><a href="#">Welcome to Dagon Shop</a></li>
            </ul><!-- hotline -->
            <!-- heder links -->
            <ul class="nav-top-right dagon-nav">
                <li class="menu-item-has-children">
                    <a href="#" class="dropdown-toggle">
                        <img src="{{ asset('images/general/l1.jpg') }}" alt="flag">English
                    </a>
                    <ul class="submenu parent-megamenu">
                        <li class="switcher-option">
                            <a href="#" class="flag"><img src="{{ asset('images/general/l1.jpg') }}"
                                    alt="flag">English</a>
                        </li>
                        <li class="switcher-option">
                            <a href="#" class="flag"><img src="{{ asset('images/general/l2.jpg') }}"
                                    alt="flag">Hungary</a>
                        </li>
                        <li class="switcher-option">
                            <a href="#" class="flag"><img src="{{ asset('images/general/l3.jpg') }}"
                                    alt="flag">German</a>
                        </li>
                        <li class="switcher-option">
                            <a href="#" class="flag"><img src="{{ asset('images/general/l4.jpg') }}"
                                    alt="flag">French</a>
                        </li>
                        <li class="switcher-option">
                            <a href="#" class="flag"><img src="{{ asset('images/general/l5.jpg') }}"
                                    alt="flag">Canada</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#" class="dropdown-toggle">
                        <span>Dollar (US)</span>
                    </a>
                    <ul class="submenu parent-megamenu">
                        <li class="switcher-option">
                            <a href="#" class="switcher-flag icon">Pound (GBP)</a>
                        </li>
                        <li class="switcher-option">
                            <a href="#" class="switcher-flag icon">Euro (EUR)</a>
                        </li>
                        <li class="switcher-option">
                            <a href="#" class="switcher-flag icon">Dollar (USD)</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i class="flaticon-profile" aria-hidden="true"></i>Register / Sign in</a></li>
            </ul><!-- heder links -->
        </div>
    </div> <!-- header-top -->
    <!-- header-content -->
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 nav-left">
                    <!-- logo -->
                    <strong class="logo">
                        <a href="{{route('index')}}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
                    </strong><!-- logo -->
                </div>
                <div class="col-md-8 nav-mind">
                    <!-- block search -->
                    <div class="block-search">
                        <div class="block-content">
                            <div class="categori-search  ">
                                <select title="categories" data-placeholder="All Categories"
                                    class="chosen-select categori-search-option">
                                    <option value="">All Categories</option>
                                    <optgroup label="LifeStyle">
                                        <option>Cell Phones</option>
                                        <option>Game & Consoles</option>
                                        <option>Smart Watchs</option>
                                    </optgroup>
                                    <optgroup label="Smartphone">
                                        <option>Cell Phones</option>
                                        <option>Game & Consoles</option>
                                        <option>Smart Watchs</option>
                                    </optgroup>
                                    <optgroup label="LifeStyle">
                                        <option>Cell Phones</option>
                                        <option>Game & Consoles</option>
                                        <option>Smart Watchs</option>
                                    </optgroup>
                                    <optgroup label="Smartphone">
                                        <option>Cell Phones</option>
                                        <option>Game & Consoles</option>
                                        <option>Smart Watchs</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-search">
                                <form>
                                    <div class="box-group">
                                        <input type="text" class="form-control" placeholder="Search keyword here...">
                                        <button class="btn btn-search" type="button"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- block search -->
                </div>
                <div class="col-md-2 nav-right">
                    <!-- block mini cart -->
                    <span data-action="toggle-nav" class="menu-on-mobile hidden-md style2">

                        <span class="btn-open-mobile home-page">

                            <span></span>

                            <span></span>

                            <span></span>

                        </span>

                        <span class="title-menu-mobile">Main menu</span>

                    </span>
                    <div class="block-minicart dropdown style2">
                        <a class="minicart" href="#">

                            <span class="counter qty">

                                <span class="cart-icon"><img src="{{ asset('images/cart.png') }}" alt="#"></span>

                                <span class="counter-number">5</span>

                            </span>
                            <span class="counter-your-cart">

                                <span class="counter-label">Your Cart:</span>

                                <span class="counter-price">$00.00</span>

                            </span>
                        </a>
                        <div class="parent-megamenu">
                            <form>
                                <div class="minicart-content-wrapper">
                                    <div class="subtitle">
                                        You have <span>2</span> item(s) in your cart
                                    </div>
                                    <div class="minicart-items-wrapper">
                                        <ol class="minicart-items">
                                            {{-- @foreach ($cart_items as $item)
                                                <li class="product-inner">
                                                    <div class="product-thumb style1">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="{{ asset($item->image) }}"
                                                                    alt="c1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">{{$item->name}}
                                                            </a></div>
                                                        <a href="#" class="remove"><i class="fa fa-times"
                                                                aria-hidden="true"></i></a>
                                                        <span class="price price-dark">

                                                            <ins>{{$item->price}}</ins>

                                                        </span>
                                                    </div>
                                                </li>
                                            @endforeach --}}
                                        </ol>
                                    </div>
                                    <div class="subtotal">
                                        <span class="label">Total :</span>
                                        <span class="price">$480.00</span>
                                    </div>
                                    <div class="actions">
                                        <div class="row">
                                            <div class="col-6">
                                                <a class="btn btn-viewcart" href="{{ route('cart.index') }}">View
                                                    cart</a>
                                            </div>
                                            <div class="col-6">
                                                <a class="btn btn-checkout" href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- block mini cart -->
                    <a href="#" class="hidden-md search-hidden"><span class="flaticon-magnifying-glass"></span></a>
                    <a class="wishlist-minicart" href="wishlist.html"><i class="fa fa-heart-o"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div><!-- header-content -->
    <!-- header-menu-bar -->
    <div class="header-menu-bar header-menu-opt-5 header-sticky">
        <div class="header-menu-nav menu-style-3">
            <div class="container">
                <div class="header-menu-nav-inner header-menu-resize">
                    <div class="header-menu ">
                        <ul class="header-nav dagon-nav">
                            <li class="btn-close hidden-md"><i class="flaticon-close" aria-hidden="true"></i></li>
                            <li class="menu-item-has-children">
                                <a href="index2.html">Khuyến mãi</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index2.html">Đơn hàng</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index2.html">Đăng nhập</a>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="title-template transport hidden-sm"><i class="far fa-building"></i>Hệ thống
                        showroom</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- end HEADER -->
