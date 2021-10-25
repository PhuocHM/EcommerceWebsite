@extends('admin.include.layout')
@section('main')
    <div class="wrapper">        
        <!--start content-->
        <main class="page-content">

            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Orders</p>
                                    <h4 class="mb-0 text-primary">8245</h4>
                                </div>
                                <div class="ms-auto fs-2 text-primary">
                                    <i class="bi bi-cart-check"></i>
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <small class="mb-0"><span class="text-success">+2.5 <i
                                        class="bi bi-arrow-up"></i></span> Compared to last month</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Sales</p>
                                    <h4 class="mb-0 text-success">$4,562</h4>
                                </div>
                                <div class="ms-auto fs-2 text-success">
                                    <i class="bi bi-piggy-bank"></i>
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <small class="mb-0"><span class="text-success">+3.6 <i
                                        class="bi bi-arrow-up"></i></span> Compared to last month</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Purchase</p>
                                    <h4 class="mb-0 text-pink">$9,482</h4>
                                </div>
                                <div class="ms-auto fs-2 text-pink">
                                    <i class="bi bi-bag-check"></i>
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <small class="mb-0"><span class="text-danger">-1.8 <i
                                        class="bi bi-arrow-down"></i></span> Compared to last month</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Return</p>
                                    <h4 class="mb-0 text-orange">146</h4>
                                </div>
                                <div class="ms-auto fs-2 text-orange">
                                    <i class="bi bi-recycle"></i>
                                </div>
                            </div>
                            <div class="border-top my-2"></div>
                            <small class="mb-0"><span class="text-success">+3.7 <i
                                        class="bi bi-arrow-up"></i></span> Compared to last month</small>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->



        </main>
        <!--end page main-->

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                    class="bi bi-paint-bucket me-0"></i></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
                tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1" checked>
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                            value="option3">
                        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                    </div>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                            value="option3">
                        <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end switcher-->

    </div>
@endsection
