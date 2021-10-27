@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Nhân Sự </h6>
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
                            <form method="POST" class="row g-3"
                                action="{{ route('employees.update', $employee->id) }}" enctype="multipart/form-data">
                                @method('PUT')
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label class="form-label">Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên nhân sự" name="name"
                                        value="{{ $employee->name }}">
                                    <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Slug</label>
                                    <input type="text" class="form-control" placeholder="Slug " name="slug"
                                        value="{{ $employee->slug }}">
                                    <span style="color:red;">@error('slug'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="mail"
                                        value="{{ $employee->mail }}">
                                    <span style="color:red;">@error('mail'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mật khẩu</label>
                                    <input type="text" class="form-control" placeholder="Password" name="password"
                                        value="{{ $employee->password }}">
                                    <span style="color:red;">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" class="form-control" placeholder="Ngày sinh" name="birthday"
                                        value="{{ $employee->birthday }}">
                                    <span style="color:red;">@error('birthday'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Địa chỉ</label>
                                    <input type="text" class="form-control" placeholder="Địa chỉ" name="address"
                                        value="{{ $employee->address }}">
                                    <span style="color:red;">@error('address'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Thẻ căn cước</label>
                                    <input type="text" class="form-control" placeholder="CCCD" name="identification"
                                        value="{{ $employee->identification }}">
                                    <span style="color:red;">@error('identification'){{ $message }} @enderror</span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Hình ảnh</label>
                                    <input type="text" name="image" value="{{ $employee->image }}">
                                    <input type="file" name="image" class="form-control-file" id="image"
                                        value="{{ $employee->image }} "> <br>
                                    <img src="{{ asset('/images/employee/' . $employee->image) }}" alt=""
                                        style="width: 150px">
                                    <span style="color:red;">@error('image'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thuộc chức vụ</label>
                                    <select name="group_id" class="form-select" id="inputGroupSelect02">
                                        @foreach ($groups as $group)
                                            <option {{ $group->id == $employee->group_id ? 'selected' : '' }}
                                                value="{{ $group->id }}">{{ $group->name }}</option>
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
                                        <a href="{{ route('employees.index') }}" class="btn btn-danger">Trở về </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
