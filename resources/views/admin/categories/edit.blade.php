@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh sửa danh mục </h6>
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
                            <form method="POST" class="row g-3" action="{{ route('categories.update', $category->id) }}">
                                @method('PUT')
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên danh mục" name="name"
                                        value="{{ $category->name }}">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" placeholder="Slug name" name="slug"
                                        value="{{ $category->slug }}">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mô tả</label>
                                    <textarea class="form-control" rows="3" cols="3" name="description"
                                        placeholder="Product Description"> {{ $category->description }}</textarea>
                                    <span style="color:red;">@error('description'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc danh mục</label>
                                      <select name="parent_id" class="form-control input-sm m-bot15">
                                        <option value="0">----Danh mục----</option>
                                        @foreach($categories as $key => $val)
                                            @if($val->id != $category->id)
                                                <option {{$val->id == $category->parent_id ? 'selected' : ''}} value="{{$val->id}}">{{$val->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Trạng thái</label>
                                    <select name="status" class="form-select" id="inputGroupSelect02">
                                        @if ($category->status == 0)
                                            <option selected value="0">Kích hoạt<table></table>
                                            </option>
                                            <option value="1">Không kích hoạt</option>
                                        @else ($category->status == 1)
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
                                        <a href="{{ route('categories.index') }}" class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
