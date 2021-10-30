@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Thêm Thuộc Tính Sản Phẩm</h6>
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
                        <form class="row g-3" method="POST" action="{{ route('productAttributes.store') }}">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Sản phẩm</label>
                                <select name="product_id" class="form-select js-example-basic-single form-product" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                    <option>Thêm sản phẩm</option>
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Thuộc tính</label>
                                <select name="attribute_id" class="form-select js-example-basic-single form-attribute" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option>Thêm thuộc tính</option>
                                    @foreach ($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Nội dung</label>
                                <input type="text" name="content" value="{{ old('content') }}" class="form-control" placeholder="Nội dung">
                                <span style="color:red;">@error('content'){{ $message }} @enderror</span>
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
                                        <a href="{{ route('productAttributes.index') }}" class="btn btn-danger">Trở
                                            về</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
