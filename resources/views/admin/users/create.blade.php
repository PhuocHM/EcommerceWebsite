@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm Mới Tài Khoản Khách Hàng</h6>
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
                            <form class="row g-3" method="POST" action="{{ route('users.store') }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        onkeyup="ChangeToSlug();" id="slug" placeholder="Tên khách hàng">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                        placeholder="Email">
                                    <span style="color:red;">@error('email'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input type="text" name="password" value="{{ old('password') }}"
                                        class="form-control" placeholder="Password">
                                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Thêm mới</button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-grid">
                                            <a href="{{ route('users.index') }}" class="btn btn-danger">Trở
                                                về</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
