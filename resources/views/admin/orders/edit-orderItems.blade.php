@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Chi Tiết Đơn Hàng </h6>
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
                                action="{{ route('orderItems.update', $orderItem->id) }}">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Tên sản phẩm</label>
                                    <select name="product_id" class="form-control input-sm m-bot15">
                                        @foreach ($products as $product)
                                            <option {{ $product->id == $orderItem->product_id ? 'selected' : '' }}
                                                value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Giá mỗi sản phẩm</label>
                                    <input type="text" class="form-control" placeholder="Giá mỗi đơn hàng" name="price"
                                        value="{{ $orderItem->price }}">
                                    <span style="color:red;">@error('price'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Số lượng đặt hàng</label>
                                    <input type="text" class="form-control" placeholder="Số lượng đặt hàng"
                                        name="quantity" value="{{ $orderItem->quantity }}">
                                    <span style="color:red;">@error('quantity'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('orders.show', $orderItem->order_id) }}"
                                            class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
