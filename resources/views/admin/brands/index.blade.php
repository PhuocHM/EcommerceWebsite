@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">eCommerce</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class=""><a href="javascript:;"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">&ensp;Thương hiệu</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('brands.create') }}" class="btn btn-primary">Thêm thương hiệu</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <form class="form-inline my-2 my-lg-0">
                    <select name="sort" id="sort" class="form-control">
                        <option value="{{ Request::url() }}?sort_by={{ $sort_by }}">{{ $name_sort }}</option>
                        <option value="{{ Request::url() }}?sort_by=newest">--Từ cũ đến mới--</option>
                        <option value="{{ Request::url() }}?sort_by=latest">--Từ mới đến cũ--</option>
                        <option value="{{ Request::url() }}?sort_by=name_a_to_z">--Tên A đến Z--</option>
                        <option value="{{ Request::url() }}?sort_by=name_z_to_a">--Tên Z đến A--</option>
                    </select>
                </form>
            </div>

            <div class="col-md-9">
                <form class="form-inline my-2 my-lg-0">
                    <button style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                        kiếm</button>
                    <input style="width: 300px; margin-right: 10px; float:right" class="form-control" action="{{ route('brands.index') }}" method="GET" name="brand" type="text" placeholder="Tìm kiếm">
                    </select>
                </form>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card mt-3">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if(isset($brands))
                                    <table id="dataTable" class="table ">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Tên</th>

                                                <th>Hình ảnh</th>

                                                <th>Ngày cập nhật</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($brands)>0)
                                            @foreach ($brands as $key => $brand)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $brand->name }}</td>

                                                <td>
                                                    <img src="{{ asset($brand->image) }}" alt="" style="width: 150px">
                                                </td>

                                                <td>
                                                    @if ($brand->updated_at != '')
                                                    {{ date('d-m-Y', strtotime($brand->updated_at)) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">

                                                        <a href="{{ route('brands.edit', $brand->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <form action="{{ route('brands.destroy', [$brand->id]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="#" onclick="deleteBrand({{ $brand->id }})" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteBrand"> <i class="bi bi-trash-fill"></i></a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @else
                                            <h3>Thương hiệu cần tìm không có</h3>
                                            @endif
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                                {{-- Test Modal Delete --}}
                                <!-- Modal -->
                                <div class="modal fade" id="deleteBrand" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa không
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Hành động này sẽ không thể thu hồi !
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                                <form id="deleteForm" action="#" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- --}}
                                <div class=" box-footer clearfix" style="float:right">
                                    {{ $brands->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>

    </main>
</div>
@endsection
@section('scripts')
<script>
    function deleteBrand(id) {
        var url = "{{ route('brands.index') }}" + "/" + id;
        $('#deleteForm').attr('action', url)
    }

</script>
@endsection
