@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <div class="card-header py-3">
            <h6 class="mb-0">Thêm Phân Quyền Quản LÝ</h6>
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
                        <form class="row g-3" method="POST" action="{{ route('groupPermisions.store') }}">
                            @csrf

                            <div class="col-12">
                                <label class="form-label">Chức vụ</label>
                                <select name="group_id" class="form-select js-example-basic-single form-category" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option>Chọn chức vụ</option>
                                    @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Quyền hạn</label>
                                <select name="role_id" class="form-select js-example-basic-single form-category" data-select2-id="2" tabindex="-1" aria-hidden="true">
                                    <option>Chọn quyền hạn</option>
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->info }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                            <div class="row" style="margin-top:50px">
                                <div class="col-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Thêm mới</button>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-grid">
                                        <a href="{{ route('groupPermisions.index') }}" class="btn btn-danger">Trở
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
