@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Đơn Hàng </h6>
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
                            <form method="POST" class="row g-3" action="{{ route('orders.update', $order->id) }}">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Mã đơn hàng</label>
                                    <input type="text" class="form-control" placeholder="Mã đơn hàng" name="code"
                                        value="{{ $order->code }}">
                                    <span style="color:red;">@error('code'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Tên khách hàng</label>
                                    <select name="customer_id" class="form-control input-sm m-bot15">
                                        @foreach ($customers as $customer)
                                            <option {{ $customer->id == $order->customer_id ? 'selected' : '' }}
                                                value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Phương thức thanh toán</label>
                                    <input type="text" class="form-control" placeholder="Phương thức thanh toán"
                                        name="payment_method" value="{{ $order->payment_method }}">
                                    <span style="color:red;">@error('payment_method'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Tổng giá đơn hàng</label>
                                    <input type="text" class="form-control" placeholder="Phương thức thanh toán"
                                        name="total_price" value="{{ $order->total_price }}">
                                    <span style="color:red;">@error('total_price'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Trạng thái</label>
                                    <select name="status" class="form-select" id="inputGroupSelect02">
                                        @if ($order->status == 0)
                                            <option selected value="0">Đang chờ
                                            </option>
                                            <option value="1">Đang vận chuyển</option>
                                            <option value="2">Đã hoàn thành</option>
                                        @elseif ($order->status == 1)
                                            <option value="0">Đang chờ<table></table>
                                            </option>
                                            <option selected value="1">Đang vận chuyển</option>
                                            <option value="2">Đã hoàn thành
                                            </option>
                                        @else
                                            <option value="0">Đang chờ
                                            </option>
                                            <option value="1">Đang vận chuyển</option>
                                            <option selected value="2">Đã hoàn thành<table></table>
                                            </option>
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
                                        <a href="{{ route('orders.index') }}" class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
