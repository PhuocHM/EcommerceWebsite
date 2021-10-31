@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Thêm Mới Hình Ảnh</h6>
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
                        <form class="row g-3" method="POST" action="{{ route('productImages.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Sản phẩm</label>
                                <select name="product_id" class="form-select" id="inputGroupSelect02">
                                    @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Hình ảnh</label>
                                <input type="file" name="image[]" class="form-control-file" id="image" value="{{ old('image') }}"> <br>
                                <span style="color:red;">@error('image'){{ $message }} @enderror</span>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Thể loại</label>
                                <select name="type" class="form-select" id="image_type">
                                    <option value="1">Ảnh bìa</option>
                                    <option value="0">Ảnh thường </option>
                                </select>
                                <br>
                            </div>
                            <div id="add_more_image" style="margin-bottom:50px;display:none">
                                <button type="button" id="add_image" class="btn btn-sm btn-success px-5" style="margin-bottom:50px">Thêm ảnh</button>
                                <button type="button" id="delete_image" class="btn btn-sm btn-danger" style="margin-bottom:50px">Xóa hết</button>
                                <div id="add_image_area"></div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Thêm mới</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('productImages.index') }}" class="btn btn-danger">Trở
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
    $("#image_type").on('change', function() {
        if ($(this).val() == 0) {
            $("#add_more_image").show();
        } else {
            $("#add_more_image").hide();
        }
    });
    $("#add_image").click(function() {
        $("#add_image_area").append(`
                                    <div style="margin-bottom:10px">
                                        <label for="custom-file-upload" class="filupp">
                                            <input type="file" name="image[]"  />
                                        </label>
                                    </div>
        `);
    })
    $("#delete_image").click(function() {
        $("#add_image_area").html('');
    })

</script>
@endsection
