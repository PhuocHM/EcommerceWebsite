@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Thương Hiệu </h6>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="col-12 col-lg-8 mx-auto d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <form method="POST" class="row g-3" action="{{ route('users.update', $user->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên khách hàng" name="name"
                                        value="{{ $user->name }}">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>                              
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        value="{{ $user->email }}">
                                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mật khẩu</label>
                                    <input type="text" class="form-control" placeholder="Password" name="password"
                                        value="{{ $user->password }}">
                                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('users.index') }}" class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
