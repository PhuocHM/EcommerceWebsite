<!-- HEADER -->
<header class="site-header header-opt-1">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- hotline -->
            <ul class="nav-top-left">
                <li><a href="#">Chào mừng đến với Horizon</a></li>
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
                <li>
                    @if (Auth::check())
                        <div class="dropdown ">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-light">{{ Auth::user()->name }}</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
                                style="min-width:75px !important">
                                <a class="dropdown-item text-dark" style="color: black" href="{{ route('setting.user') }}">Setting</a>
                                <a class="dropdown-item text-dark" style="color: black"
                                    href="{{ route('logout.user') }}">Đăng xuất</a>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('register') }}"><i class="flaticon-profile" aria-hidden="true"></i>Đăng kí
                            /</a>
                        <a href="{{ route('login') }}">Đăng nhập</a>
                    @endif
                </li>
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
                        <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
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
                    <div class="block-minicart dropdown style2" id="mini-cart">
                        {{--  --}}
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
                            @if (!Auth::check())
                                <li class="menu-item-has-children">
                                    <a href="index2.html">Đăng nhập</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <a href="#" class="title-template transport hidden-sm"><i class="far fa-building"></i>Hệ thống
                        showroom</a>
                </div>
            </div>
        </div>
    </div>
</header><!-- end HEADER -->
