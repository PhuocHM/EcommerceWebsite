@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Thêm chiết khấu sản phẩm</h6>
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
                        <form class="row g-3" method="POST" action="{{ route('discountProduct.store') }}">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Thuộc chiết khấu</label>
                                <select name="discount_id" class="form-select" id="inputGroupSelect02">
                                    @foreach ($discounts as $discount)
                                    <option value="{{ $discount->id }}">{{ $discount->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-12">
                                <label class="form-label">Thuộc Sản phẩm</label>
                                <select name="product_id" class="form-select" id="inputGroupSelect02">
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="row mt-2">
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Thêm mới</button>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('discountProduct.index') }}" class="btn btn-danger">Trở
                                            về</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</main>
</div>
@endsection
