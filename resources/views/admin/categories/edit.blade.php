@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh sửa danh mục </h6>
            </div>
            <div class="col-12 col-lg-4 d-flex">
                <div class="card border shadow-none w-100">
                    <div class="card-body">
                        <form action="{{route('')}} class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Tên</label>
                                <input type="text" class="form-control" placeholder="Category name">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" placeholder="Slug name">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Parent</label>
                                <select class="form-select">
                                    <option></option>           
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" rows="3" cols="3"
                                    placeholder="Product Description"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Trạng thái</label>
                                <select name="category_status" class="form-select" id="inputGroupSelect02">
                                    @if ($category->status == 0)
                                        <option selected value="0">Hiển thị<table></table>
                                        </option>
                                        <option value="1">Ẩn</option>
                                    @else ($category->status == 1)
                                        <option value="0">Hiển thị<table></table>
                                        </option>
                                        <option selected value="1">Ẩn</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Cập nhật</button>
                                    <a href="{{ route('categories.index')}}" class="btn btn-danger"
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection