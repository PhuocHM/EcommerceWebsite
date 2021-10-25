@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm Mới Sản Phẩm</h6>
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
                            <form class="row g-3" method="POST" action="{{ route('products.store') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Mã</label>
                                    <input type="text" name="code" class="form-control"                                         placeholder="Mã sản phẩm">
                                    <span style="color:red;">@error('code'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Tên</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        onkeyup="ChangeToSlug();" id="slug" placeholder="Tên sản phẩm">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                                        id="convert_slug" placeholder="Slug sản phẩm">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Danh mục sản phẩm</label>
                                    <select name="category_id" class="form-select" id="inputGroupSelect02">                                  
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thương hiệu</label>
                                    <select name="brand_id" class="form-select" id="inputGroupSelect02">
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Đã bán</label>
                                    <input type="text" name="sold" class="form-control" value="{{ old('sold') }}"
                                        id="convert_slug" placeholder="Đã bán">
                                    <span style="color:red;">@error('sold'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Giá</label>
                                    <input type="text" name="price" class="form-control" value="{{ old('price') }}"
                                        id="convert_slug" placeholder="Giá">
                                    <span style="color:red;">@error('price'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mô tả</label>
                                    <textarea name="description" value="" id="ckeditor_category" class="form-control"
                                        rows="3" style="resize: none">{!! old('description') !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1">Trạng Thái</label>
                                    <select name="status" class="form-select" id="inputGroupSelect02">
                                        <option value="0">Kích hoạt</option>
                                        <option value="1">Không kích hoạt</option>
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
                                            <a href="{{ route('products.index') }}" class="btn btn-danger">Trở
                                                về</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection