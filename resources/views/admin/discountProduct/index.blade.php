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
                        <li class="breadcrumb-item active" aria-current="page">&ensp;Thuộc chiết khấu sản phẩm</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('discountProduct.create') }}" class="btn btn-primary">Thêm mới</a>
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
                        <option value="{{ Request::url() }}?sort_by=name_a_to_z">--Tên sản phẩm A đến Z--</option>
                        <option value="{{ Request::url() }}?sort_by=name_z_to_a">--Tên sản phẩm Z đến A--</option>
                        <option value="{{ Request::url() }}?sort_by=amount_a_to_z">--Số tiền KM ít tới nhiều--
                        </option>
                        <option value="{{ Request::url() }}?sort_by=amount_z_to_a">--Số tiền KM nhiều tới ít--
                        </option>
                    </select>
                </form>
            </div>
            <div class="col-md-9">
                <form class="form-inline my-2 my-lg-0">
                    <button style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                        kiếm</button>
                    <input style="width: 300px; margin-right: 10px; float:right" class="form-control" action="{{ route('discountProduct.index') }}" method="GET" name="discountProduct" type="text" placeholder="Tìm kiếm">

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
                                    <table id="dataTable" class="table ">
                                        <thead class="table-light">
                                            <tr>
                                                <th>#</th>
                                                <th>Thuộc Sản phẩm</th>
                                                <th>Thuộc Chiết khấu</th>
                                                <th>Số tiền được chiết khấu (VNĐ)</th>
                                                <th>Ngày tạo</th>
                                                <th>Ngày cập nhật</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($discountProducts as $key => $discountProduct)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $discountProduct->product->name }}</td>
                                                <td>{{ $discountProduct->discount->name }}</td>
                                                <td>{{ number_format($discountProduct->discount->amounts) }}</td>


                                                <td>{{ date('d-m-Y', strtotime($discountProduct->created_at)) }}
                                                </td>
                                                <td>
                                                    @if ($discountProduct->updated_at != '')
                                                    {{ date('d-m-Y', strtotime($discountProduct->updated_at)) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">

                                                        <a href="{{ route('discountProduct.edit', $discountProduct->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <form action="{{ route('discountProduct.destroy', [$discountProduct->id]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="#" onclick="deleteProductAtrribute({{ $discountProduct->id }})" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteProductAtrribute"> <i class="bi bi-trash-fill"></i></a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{-- Test Modal Delete --}}
                                <!-- Modal -->
                                <div class="modal fade" id="deleteProductAtrribute" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    {{ $discountProducts->links() }}
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
    function deleteProductAtrribute(id) {
        var url = "{{ route('discountProduct.index') }}" + '/' + id;
        $('#deleteForm').attr('action', url)
    }

</script>
@endsection
