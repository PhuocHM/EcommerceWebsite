<!-- HEADER -->
<div style="display: none">
    <button id="error_login_button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#error_login">
        Launch demo modal
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="error_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Vui lòng đăng nhập để có thể thêm hàng vào giỏ
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <a href="{{ route('login') }}" class="btn btn-primary">Đăng nhập</a>
            </div>
        </div>
    </div>
</div>
<header class="site-header header-opt-1">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- hotline -->
            <ul class="nav-top-left">
                <li><a href="#">CHÀO MỪNG ĐẾN VỚI HORIZON</a></li>
            </ul><!-- hotline -->
            <!-- heder links -->
            <ul class="nav-top-right dagon-nav">
                <li>
                    @if (Auth::check())
                    <div class="dropdown">
                        <img src="{{ asset('images/avatar2.png') }}" alt="" class="avatar">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-light">{{ Auth::user()->name }}&ensp;<i class="fas fa-angle-down"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" text-align:center;border-radius: 5%;border:1px solid #fff">

                            <a class="dropdown-item text-dark" style="color: #7a7a7a" href="{{ route('setting.pass') }}">Đổi mật khẩu</a>
                            <br>
                            <a class="dropdown-item text-dark" style="color: #7a7a7a" href="{{ route('setting.user') }}">Chỉnh sửa thông tin</a>
                            <br>
                            <a class="dropdown-item text-dark" style="color: #7a7a7a" href="{{ route('logout.user') }}">Đăng xuất</a>
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
                    <div style="width:66%">
                        <input style="witdh:70%;height:50px;border-radius:30px;margin-left:154px" class="form-control" type="text" id="seach_input" placeholder="Nhập tên sản phẩm cần tìm .... ">
                    </div>
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
                    @if(Auth::check())
                    <div class="block-minicart dropdown style2" id="mini-cart">
                        {{-- --}}
                    </div><!-- block mini cart -->
                    @endif
                    <a href="#" class="hidden-md search-hidden"><span class="flaticon-magnifying-glass"></span></a>
                    {{-- <a class="wishlist-minicart" href="wishlist.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a> --}}
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
                                <a href="{{ route('coupon.index') }}">Mã của bạn</a>
                            </li>

                            @if (Auth::check())
                            <li class="menu-item-has-children">
                                <a href="{{ route('order.orderDetail') }}">Đơn hàng</a>
                            </li>
                            @endif
                            @if (!Auth::check())
                            <li class="menu-item-has-children">
                                <a href="{{ route('login') }}">Đăng nhập</a>
                            </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header><!-- end HEADER -->
