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
                            <form method="POST" class="row g-3"
                                action="{{ route('discounts.update', $discount->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Tên</label>
                                    <input type="text" class="form-control" name="name" value="{{ $discount->name }}">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Số tiền giảm</label>
                                    <input type="text" name="amounts" value="{{ $discount->amounts }}"
                                        class="form-control">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ngày bắt đầu</label>
                                    <input type="text" name="start_date" id="start_date" class="form-control"
                                        value="{{ $discount->start_date }}">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ngày kết thúc</label>
                                    <input type="text" name="expired_date" id="expired_date" class="form-control"
                                        value="{{ $discount->expired_date }}">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mô tả</label>
                                    <textarea class="form-control" rows="3" name="description" id="ckeditor_category"
                                        style="resize: none"> {!! $discount->description !!}</textarea>
                                    <span style="color:red;">@error('description'){{ $message }} @enderror</span>
                                </div>
                                <label class="form-label">Hình ảnh</label>
                                <input type="file" name="image" class="form-control-file" id="image"
                                    value="{{ $discount->image }}"> <br>
                                <img src="{{ asset('/images/discount/' . $discount->image) }}" alt=""
                                    style="width: 150px">
                                <span style="color:red;">@error('image'){{ $message }} @enderror</span>
                                
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Cập nhật</button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-grid">
                                            <a href="{{ route('discounts.index') }}" class="btn btn-danger">Trở về </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
