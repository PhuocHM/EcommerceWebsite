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
                            <form class="row g-3" method="POST" action="{{ route('suppliers.store') }}"
                                enctype="multipart/form-data">
                                {{-- {{ csrf_field() }} --}}
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Tên nhà cung cấp</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        onkeyup="ChangeToSlug();" id="slug" placeholder="Tên thương hiệu">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                                        id="convert_slug" placeholder="Slug nhà cung cấp">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Địa chỉ" value="{{ old('address') }}">
                                    <span style="color:red;">@error('address'){{ $message }} @enderror</span>

                                </div>
                                <div class="col-12">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="SĐT"
                                        value="{{ old('phone') }}">
                                    <span style="color:red;">@error('phone'){{ $message }} @enderror</span>
                                    <br>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-grid">
                                            <a href="{{ route('suppliers.index') }}" class="btn btn-danger">Trở
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
