@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Thuộc Tính Sản Phẩm</h6>
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
                                action="{{ route('discountProduct.update', $discountProduct->id) }}">
                                @method('PUT')
                                @csrf  
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc sản phẩm</label>
                                    <select name="product_id" value="{{ $discountProduct }}"
                                        class="form-select" id="inputGroupSelect02">
                                        @foreach ($products as $product)
                                            <option {{ $product->id == $discountProduct->product_id ? 'selected' : '' }}
                                                value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc chiết khấu</label>
                                    <select name="discount_id"
                                        class="form-select" id="inputGroupSelect02">
                                        @foreach ($discounts as $discount)
                                            <option {{ $discount->id == $product->discount_id ? 'selected' : '' }}
                                                value="{{ $discount->id }}">{{ $discount->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('discountProduct.index') }}" class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
