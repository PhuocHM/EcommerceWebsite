@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Chỉnh Sửa Phân Quyền Quản Lý</h6>
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
                                action="{{ route('groupPermisions.update', $groupPermision->id) }}">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chức vụ</label>
                                    <select name="group_id" value="{{ $groupPermision }}" class="form-select"
                                        id="inputGroupSelect02">
                                        @foreach ($groups as $group)
                                            <option {{ $group->id == $groupPermision->group_id ? 'selected' : '' }}
                                                value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Vai trò</label>
                                    <select name="role_id" class="form-select" id="inputGroupSelect02">
                                        @foreach ($roles as $role)
                                            <option {{ $role->id == $groupPermision->role_id ? 'selected' : '' }}
                                                value="{{ $role->id }}">{{ $role->name }}</option>
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
                                        <a href="{{ route('groupPermisions.index') }}" class="btn btn-danger">Trở về
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
