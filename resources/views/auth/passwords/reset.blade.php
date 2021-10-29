@extends('include.layout')
@section('title', ' Đổi mật khẩu')

@section('main')
    <div class="container">
        <div class="row col-md-offset-3" style="margin-top:50px">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align:center">
                        <h3>Đổi mật khẩu</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('reset.pass') }}">
                            @csrf

                            @method('put')
                            <div class="col-sm-12">
                                <p class="form-row form-row-wide padding-left">
                                    <label>Mật khẩu cũ<span class="required">*</span></label>
                                    <input type="password" name="password" class="input-text">
                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @enderror
                                </p>

                            </div>

                            <div class="col-sm-12">
                                <p class="form-row form-row-wide padding-left">
                                    <label>Mật khẩu mới<span class="required">*</span></label>
                                    <input type="password" name="new_password" class="input-text">
                                    @error('new_password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('new_password') }}</strong>
                                        </span>
                                    @enderror
                                </p>

                            </div>

                            <div class="col-sm-12">
                                <p class="form-row form-row-wide padding-right">
                                    <label>Nhập lại mật khẩu<span class="required">*</span></label>
                                    <input type="password" name="new_password_confirmation" class="input-text">
                                    @error('new_password_confirmation')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                        </span>
                                    @enderror
                                </p>
                            </div>

                            <div class="col-sm-12">
                                <p class="form-row">
                                    <input type="submit" value="Đổi mật khẩu" name="Submit" class="button-submit">
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
