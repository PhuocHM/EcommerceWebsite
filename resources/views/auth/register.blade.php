@extends('include.layout')
@section('title, Đăng nhập')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <input title="lastname" type="text" name="text" placeholder="Last name"
                                    class="input-text">
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Email Address<span class="required">*</span></label>
                                <input title="email" type="email" name="email" placeholder="Email address"
                                    class="input-text">
                            </p>
                            <ul>
                                <li><label class="inline"><input type="checkbox"><span
                                            class="input"></span>Sign Up for
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
    </main>
@endsection
