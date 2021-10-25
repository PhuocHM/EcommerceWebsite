@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm Mới Danh Mục</h6>
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
                            <form class="row g-3" method="POST" action="{{ route('categories.store') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        onkeyup="ChangeToSlug();" id="slug" placeholder="Tên danh mục">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                                        id="convert_slug" placeholder="Slug danh mục">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mô tả</label>
                                    <textarea name="description" value="" id="ckeditor_category" class="form-control"
                                        rows="3" style="resize: none">{!! old('description') !!}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Parent</label>
                                    <select name="parent_id" class="form-select" id="inputGroupSelect02">
                                        <option value="0">Danh mục cha</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
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
                                            <a href="{{ route('categories.index') }}" class="btn btn-danger">Trở
                                                về</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
