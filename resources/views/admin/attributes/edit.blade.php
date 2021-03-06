@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Chỉnh Sửa Thuộc Tính </h6>
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
                        <form method="POST" class="row g-3" action="{{ route('attributes.update', $attributes->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Tên</label>
                                <input type="text" class="form-control" placeholder="Tên danh mục" name="name" value="{{ $attributes->name }}">
                                <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" placeholder="Slug name" name="slug" value="{{ $attributes->slug }}">
                                <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Thuộc danh mục</label>
                                <select name="category_id" class="form-select js-example-basic-single form-product" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option>Chọn danh mục</option>
                                    @foreach ($categories as $category)
                                    <option {{ $category->id == $attributes->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
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
                                    <a href="{{ route('attributes.index') }}" class="btn btn-danger">Trở về </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endsection
