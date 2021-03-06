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
                        <form class="row g-3" method="POST" action="{{ route('orderItems.store') }}">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label class="form-label">Tên sản phẩm</label>
                                <select name="product_id" class="form-select js-example-basic-single form-product-attribute" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Giá mỗi sản phẩm</label>
                                <input type="hidden" id="product_price" name="price" class="form-control" value="{{ old('price') }}" id="convert_slug" placeholder="Giá mỗi sản phẩm">
                                <input type="text" readonly id="product_price_show" name="product_price_show" class="form-control" value="{{ old('price') }}" id="convert_slug" placeholder="Giá mỗi sản phẩm">
                                <span style="color:red;">@error('price'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Số lượng đặt hàng</label>
                                <input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}" id="convert_slug" placeholder="Giá mỗi sản phẩm">
                                <span style="color:red;">@error('quantity'){{ $message }} @enderror</span>
                                <br>
                            </div>
                            <div class="col-12">

                                <input type="hidden" name="order_id" class="form-control" value="{{$order_id}}">
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Thêm mới</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('orders.show', $order_id) }}" class="btn btn-danger">Trở
                                            về</a>
                                    </div>
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
@section('scripts')
<script>
    $(".form-product-attribute").on('change', function() {
        let product_id = this.value;
        let url = "{{ route('ajax.ajaxFindProduct') }}";
        $.ajax({
            url: url
            , method: 'GET'
            , data: {
                product_id: product_id
            }
            , success: function(response) {
                if (response.success) {
                    $("#product_price").val(response.success[0].price);
                    $("#product_price_show").val(response.success[0].price);
                } else {
                    // 
                }
            }
        })
    })

</script>
@endsection
