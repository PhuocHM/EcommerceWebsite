@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm Đơn Hàng</h6>
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
                            <form class="row g-3" method="POST" action="{{ route('orders.store') }}">
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Tên khách hàng</label>
                                    <select name="customer_id" class="form-select" id="inputGroupSelect02">
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Phương thức thanh toán</label>
                                    <input type="text" name="payment_method" class="form-control"
                                        value="{{ old('payment_method') }}" id="convert_slug"
                                        placeholder="Phương thức thanh toán">
                                    <span style="color:red;">@error('payment_method'){{ $message }} @enderror</span>
                                    <br>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Tổng giá đơn hàng</label>
                                    <input type="text" name="total_price" class="form-control"
                                        value="{{ old('total_price') }}" id="convert_slug"
                                        placeholder="Tổng giá đơn hàng">
                                    <span style="color:red;">@error('total_price'){{ $message }} @enderror</span>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1">Trạng Thái</label>
                                    <select name="status" class="form-select" id="inputGroupSelect02">
                                        <option value="0">Đang chờ</option>
                                        <option value="1">Đang vận chuyển</option>
                                        <option value="2">Đã hoàn thành</option>
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
                                            <a href="{{ route('orders.index') }}" class="btn btn-danger">Trở
                                                về</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
