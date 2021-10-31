@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Chỉnh Sửa Nhà Cung Cấp</h6>
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
                        <form method="POST" class="row g-3" action="{{ route('stocks.update', $stock->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label class="form-label">Tên sản phẩm</label>
                                <select name="product_id_select" class="form-select js-example-basic-single form-product" data-select2-id="1" tabindex="-1" aria-hidden="true" disabled>
                                    @foreach ($products as $product)
                                    <option {{$stock->product_id == $product->id ? 'selected' : '' }} value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="product_id" value="{{$stock->product_id}}">
                                <span style="color:red;">@error('product_id'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Nhân viên nhập kho</label>
                                <option value="{{ $stock->employee_id }}">{{ $stock->employee->name }}</option>
                                <select name="employee_id" class="form-select js-example-basic-single form-product" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                    @foreach ($employees as $employee)
                                    <option {{$stock->employee_id == $employee->id ? 'selected' : '' }} value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                                <span style="color:red;">@error('employee_id'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Nhà cung cấp</label>
                                <select name="supplier_id" class="form-select js-example-basic-single form-product" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                    @foreach ($suppliers as $supplier)
                                    <option {{$stock->supplier_id == $supplier->id ? 'selected' : '' }} value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                                <span style="color:red;">@error('supplier_id'){{ $message }} @enderror</span>

                            </div>
                            <div class="col-12">
                                <label class="form-label">Số lượng</label>
                                <input type="text" name="quantity" class="form-control" placeholder="Số lượng" value="{{ $stock->quantity }}">
                                <span style="color:red;">@error('quantity'){{ $message }} @enderror</span>
                                <br>
                                <br>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Giá nhập</label>
                                <input type="text" name="cost_price" class="form-control" placeholder="Giá nhập" value="{{ $stock->cost_price }}">
                                <span style="color:red;">@error('cost_price'){{ $message }} @enderror</span>
                                <br>
                                <br>
                            </div>

                            <div class="col-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Cập nhật</button>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <a href="{{ route('stocks.index') }}" class="btn btn-danger">Trở về </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
