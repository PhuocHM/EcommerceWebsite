<!--start top header-->
<header class="top-header">
    <nav class="navbar">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
        </div>
        <div class="narbar d-none d-xl-block justufy-content-end">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status-password') }}
                </div>
            @endif
        </div>
        <div class="ms-3 float-right  d-none d-xl-block">
            {{-- <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-setting d-flex align-items-center gap-1">
                            <img src="{{ asset('images/employee/' . $admin->image) }}" class="user-img" alt="">
                            <div class="user-name d-none d-sm-block">{{ $admin->name }}</div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/employee/' . $admin->image) }}" alt="" class="rounded-circle" width="60" height="60">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">{{ $admin->name }}</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('reset.pass.admin') }}">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Đổi mật khẩu</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout.admin.action') }}">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Đăng xuất</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul> --}}
        </div>
    </nav>
</header>
<!--end top header-->
