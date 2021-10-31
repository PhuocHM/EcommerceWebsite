@extends('admin.include.layout')
@section('title', ' Đổi mật khẩu')

@section('main')
    <main class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Đổi mật khẩu</h5>
                            </div>
                            <hr>
                            <form method="POST" action="{{ route('reset.pass.admin') }}">
                                @csrf

                                @method('put')
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Mật khẩu cũ</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control">
                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Mật khẩu mới</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="new_password" class="form-control">
                                        @error('new_password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('new_password') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Nhập lại mật khẩu
                                        mới</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="new_password_confirmation" class="form-control">
                                        @error('new_password_confirmation')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">

                                        <button type="submit" class="btn btn-primary px-5">Xác nhận</button>
                                        <a href="{{ route('home') }}" class="btn btn-secondary px-5">Quay lại</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
