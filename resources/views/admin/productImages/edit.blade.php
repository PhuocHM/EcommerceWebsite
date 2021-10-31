@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Hình Ảnh Sản Phẩm </h6>
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
                                action="{{ route('productImages.update', $productImage->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc danh mục</label>
                                    <select name="product_id" value="{{ $productImage->product->name }}"
                                        class="form-select" id="inputGroupSelect02">
                                        @foreach ($products as $product)
                                            <option {{ $product->id == $productImage->product_id ? 'selected' : '' }}
                                                value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Hình ảnh</label>
                                    <input type="hidden" name="image" value="{{ $productImage->image }}">
                                    <input type="file" name="image" class="form-control-file" id="image"
                                        value="{{ $productImage->image }}"> <br>
                                    <img src="{{ asset('/images/product/' . $productImage->image) }}" alt=""
                                        style="width: 150px">
                                    <span style="color:red;">@error('image'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thể loại</label>
                                    <select name="type" class="form-select" id="inputGroupSelect02">
                                        @if ($productImage->type == 0)
                                            <option selected value="0">Ảnh bìa <table></table>
                                            </option>
                                            <option value="1">Ảnh thường</option>
                                        @else ($productImage->type == 1)
                                            <option value="0">Ảnh bìa<table></table>
                                            </option>
                                            <option selected value="1">Ảnh thường</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('productImages.index') }}" class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
