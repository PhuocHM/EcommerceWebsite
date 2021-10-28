@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm thuộc tính</h6>
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
                            <form class="row g-3" method="POST" action="{{ route('customers.store') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                                        id="convert_slug" placeholder="Slug danh mục">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"
                                       >
                                    <span style="color:red;">@error('phone'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                       >
                                    <span style="color:red;">@error('address'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Điểm thưởng</label>
                                    <input type="text" name="bonus_points" class="form-control" value="{{ old('bonus_points') }}"
                                       >
                                    <span style="color:red;">@error('bonus_points'){{ $message }} @enderror</span>
                                </div>
                                    <div class="col-12">
                                        <label class="form-label">Thuộc người dùng</label>
                                        <select name="user_id"  class="form-select" id="inputGroupSelect02">
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                     </select>
                                    </div>
                                 
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="d-grid">
                                                <button class="btn btn-primary">Thêm mới</button>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="d-grid">
                                                <a href="{{ route('attributes.index') }}" class="btn btn-danger">Trở
                                                    về</a>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
