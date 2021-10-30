@extends('admin.include.layout')

@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm Mới Nhà Cung Cấp</h6>
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
                            <form method="POST" class="row g-3" action="{{ route('coupons.store') }}"
                                enctype="multipart/form-data">

                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Số tiền giảm</label>
                                    <input type="text" class="form-control" placeholder="Số tiền giảm" name="amounts"
                                        value="{{ old('amounts') }}">
                                    <span style="color:red;">@error('amounts'){{ $message }} @enderror</span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Mô tả</label>
                                    <input type="text" name="description" class="form-control" id="description"
                                        value="{{ old('description') }}"> <br>
                                    <span style="color:red;">@error('description'){{ $message }} @enderror</span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Ngày hết hạn</label>
                                    <input type="date" name="expired_day" class="form-control" id="expired_day"> <br>
                                    <span style="color:red;">@error('expired_day'){{ $message }} @enderror</span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Hình ảnh</label>
                                    <input type="file" name="image" class="form-control-file" id="image"
                                        value="{{ old('image') }}">
                                    <span style="color:red;">@error('image'){{ $message }} @enderror</span>
                                </div>

                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Thêm mới</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('coupons.index') }}" class="btn btn-danger">Trở về </a>
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
