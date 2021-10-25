@extends('include.layout')
@section('title, Đăng nhập')

@section('main')

    <main class="site-main site-login">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index.html">Trang chủ </a></li>
                <li class="active"><a href="#">Đăng kí</a></li>
            </ol>
        </div>
        <div class="customer-login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <h5 class="title-login">Đăng nhập vào tài khoản</h5>
                        <p class="p-title-login">Nhập thông tin</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p class="form-row form-row-wide">
                                <label>Email:<span class="required"></span></label>
                                <input type="text" value="" name="email"
                                    placeholder="Nhập email" class="input-text">

                                @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @enderror

                            </p>
                            <p class="form-row form-row-wide">
                                <label>Password:<span class="required"></span></label>
                                <input type="password" name="password" placeholder="************" class="input-text">

                                @error('password')
                                    <span class="text-danger" role="alert">
                                        <strong>{{  $errors->first('password') }}</strong>
                                    </span>
                                @enderror
                            </p>

                            {{-- <ul class="inline-block">
                                <li><label class="inline"><input type="checkbox"><span
                                            class="input"></span>Remember me</label>
                                </li>
                            </ul> --}}
                            <a href="#" class="forgot-password">Forgotten password?</a>
                            <p class="form-row">
                                <input type="submit" value="Đăng nhập" name="Login" class="button-submit">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
