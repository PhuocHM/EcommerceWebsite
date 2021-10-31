@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Chỉnh Sửa Sản Phẩm </h6>
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
                        <form method="POST" class="row g-3" action="{{ route('products.update', $products->id) }}">
                            @method('PUT')
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Tên</label>
                                <input type="text" class="form-control" placeholder="Tên sản phẩm" name="name" value="{{ $products->name }}" onkeyup="ChangeToSlug();" id="slug">
                                <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" placeholder="Slug name" name="slug" id="convert_slug" value="{{ $products->slug }}">
                                <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Danh mục sản phẩm</label>
                                <select name="category_id" class="form-select js-example-basic-single form-product" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    @foreach ($categories as $category)
                                    <option {{ $category->id == $products->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Thương hiệu sản phẩm</label>
                                <select name="brand_id" class="form-control input-sm m-bot15">
                                    @foreach ($brands as $brand)
                                    <option {{ $brand->id == $products->brand_id ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Giá</label>
                                <input type="text" class="form-control" placeholder="Giá" name="price" value="{{ $products->price }}">
                                <span style="color:red;">@error('price'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" rows="3" name="description" id="ckeditor_category" style="resize: none"> {!! $products->description !!}</textarea>
                                <span style="color:red;">@error('description'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Trạng thái</label>
                                <select name="status" class="form-select" id="inputGroupSelect02">
                                    @if ($products->status == 0)
                                    <option selected value="0">Kích hoạt<table></table>
                                    </option>
                                    <option value="1">Không kích hoạt</option>
                                    @else ($products->status == 1)
                                    <option value="0">Kích hoạt<table></table>
                                    </option>
                                    <option selected value="1">Không kích hoạt</option>
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
                                    <a href="{{ route('products.index') }}" class="btn btn-danger">Trở về </a>
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
