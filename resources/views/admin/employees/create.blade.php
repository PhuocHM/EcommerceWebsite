@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Thêm Mới Nhân Sự</h6>
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
                            <form class="row g-3" method="POST" action="{{ route('employees.store') }}"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Tên</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        onkeyup="ChangeToSlug();" id="slug" placeholder="Tên nhân sự">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}"
                                        id="convert_slug" placeholder="Slug ">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="mail" class="form-control" value="{{ old('mail') }}"
                                        id="convert_slug" placeholder="Email">
                                    <span style="color:red;">@error('mail'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mật khẩu</label>
                                    <input type="text" name="password" class="form-control"
                                        value="{{ old('password') }}" id="convert_slug" placeholder="Password">
                                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" name="birthday" class="form-control"
                                        value="{{ old('birthday') }}" id="convert_slug" placeholder="Ngày sinh">
                                    <span style="color:red;">@error('birthday'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                        id="convert_slug" placeholder="Địa chỉ">
                                    <span style="color:red;">@error('address'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thẻ căn cước</label>
                                    <input type="text" name="identification" class="form-control"
                                        value="{{ old('identification') }}" id="convert_slug" placeholder="CCCD">
                                    <span style="color:red;">@error('identification'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Hình ảnh</label>
                                    <input type="file" name="image" class="form-control-file" id="image"
                                        value="{{ old('image') }}"> <br>
                                    <span style="color:red;">@error('image'){{ $message }} @enderror</span>
                                    <br>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thuộc chức vụ</label>
                                    <select name="group_id" class="form-select" id="inputGroupSelect02">
                                        @foreach ($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Thêm mới</button>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-grid">
                                            <a href="{{ route('employees.index') }}" class="btn btn-danger">Trở
                                                về</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
