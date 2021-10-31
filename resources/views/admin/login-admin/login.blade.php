<!doctype html>
<html lang="en">

<head>
    <title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('loginAdmin/css/style.css') }}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section">Trang quản lí Horizon</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img"
                            style="background-image: url({{ url('loginAdmin/images/bg-1.jpg') }});"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4" style="font-weight: normal !important">Đăng nhập</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            @if (Session::has('login-fail'))
                                <div class="login-fail">
                                    <p class="text-danger">{{ Session::get('login-fail') }}</p>
                                    <br>
                                </div>
                            @endif
                            <form action="{{ route('login.admin.action') }}" class="signin-form" method="post">
                                @csrf
                                <div class="form-group mt-3">


                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">

                                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Đăng
                                        nhập
                                    </button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Chào mừng các <a data-toggle="tab" href="#signup">Horizoner</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('loginAdmin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('loginAdmin/js/popper.js') }}"></script>
    <script src="{{ asset('loginAdmin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('loginAdmin/js/main.js') }}"></script>

</body>

</html>
