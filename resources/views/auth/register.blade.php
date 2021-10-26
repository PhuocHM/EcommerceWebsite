@extends('include.layout')
@section('title', 'Đăng kí')

@section('main')
    <main class="site-main site-login">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="index.html">Home </a></li>
                <li class="active"><a href="#">Login</a></li>
            </ol>
        </div>
        <div class="customer-login">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="text-center">
                            <h5 class="title-login">Tạo tài khoản</h5>
                            <p class="p-title-login">Thông tin người dùng</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="form-row form-row-wide padding-left">
                                        <label>Nickname<span class="required">*</span></label>
                                        <input type="text" value="{{ old('name') }}" name="name"
                                            placeholder="Nickname" class="input-text">
                                        @error('name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @enderror
                                    </p>
                                </div>

                                <div class="col-sm-6">
                                    <p class="form-row form-row-wide padding-right">
                                        <label>Họ và tên<span class="required">*</span></label>
                                        <input type="text" value="{{ old('customer_name') }}" name="customer_name"
                                            placeholder="Tên đầy đủ người dùng" class="input-text">
                                        @error('customer_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('customer_name') }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                </div>

                                <div class="col-sm-12">
                                    <p class="form-row form-row-wide">
                                        <label>Email<span class="required">*</span></label>
                                        <input type="email" value="{{ old('email') }}" name="email"
                                            placeholder="Email" class="input-text">
                                        @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                </div>

                                <div class="col-sm-12">
                                    <p class="form-row form-row-wide">
                                        <label>Số Điện Thoại<span class="required">*</span></label>
                                        <input type="text" value="{{ old('phone') }}" name="phone" placeholder="SĐT"
                                            class="input-text">
                                        @error('phone')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                </div>

                                <div class="col-sm-12">
                                    <p class="form-row form-row-wide">
                                        <label>Địa chỉ<span class="required">*</span></label>
                                        <input value="{{ old('address') }}" type="text" name="address"
                                            placeholder="Địa chỉ" class="input-text">
                                        @error('address')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                </div>

                                <div class="col-sm-12">
                                    <h5 class="title-login title-login-bottom">Login Information</h5>
                                </div>

                                <div class="col-sm-6">
                                    <p class="form-row form-row-wide padding-left">
                                        <label>Mật khẩu<span class="required">*</span></label>
                                        <input type="password" name="password" class="input-text">
                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                </div>

                                <div class="col-sm-6">
                                    <p class="form-row form-row-wide padding-right">
                                        <label>Nhập lại mật khẩu<span class="required">*</span></label>
                                        <input type="password" name="password_confirmation" class="input-text">
                                        @error('password_confirmation')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @enderror
                                    </p>

                                </div>

                                <div class="col-sm-12">
                                    <p class="form-row">
                                        <input type="submit" value="Đăng kí" name="Submit" class="button-submit">
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
