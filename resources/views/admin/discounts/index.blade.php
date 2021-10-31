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
                        <li class="breadcrumb-item active" aria-current="page">&ensp;Chương trình giảm giá</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('discounts.create') }}" class="btn btn-primary">Thêm mới</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <!-- <div class="addthis_inline_share_toolbox"></div> -->

                <form class="form-inline my-2 my-lg-0">
                    <button style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                        kiếm</button>
                    <input style="width: 300px; margin-right: 10px; float:right" class="form-control" action="{{ route('discounts.index') }}" method="GET" name="discount" type="text" placeholder="Tìm kiếm theo tên sản phẩm">

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
                                                <th>Tên chiết khấu</th>
                                                <th>Số tiền giảm (VNĐ)</th>
                                                <th>Ngày bắt đầu</th>
                                                <th>Ngày kết thúc</th>
                                                <th>Chương trình khuyến mãi</th>
                                                <th>Mô tả</th>
                                                <th>Hình ảnh</th>

                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($discounts as $key => $discount)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $discount->name }}</td>
                                                <td>{{ number_format($discount->amounts) }}</td>
                                                <td>{{ $discount->start_date }}</td>
                                                <td>{{ $discount->expired_date }}</td>
                                                <td>

                                                    @if ($discount->expired_date >= $today)
                                                    <span style="color:green">Còn hạn</span>
                                                    @else
                                                    <span style="color:red">Đã hết hạn</span>
                                                    @endif


                                                </td>

                                                <td>{!! $discount->description !!}</td>
                                                <td>
                                                    <img src="{{ asset($discount->image) }}" alt="" style="width: 150px">
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center gap-3 fs-6">
                                                        <a href="{{ route('discounts.edit', $discount->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <form action="{{ route('discounts.destroy', [$discount->id]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="#" onclick="deleteDiscount({{ $discount->id }})" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteDiscount"> <i class="bi bi-trash-fill"></i></a>
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
                                <div class="modal fade" id="deleteDiscount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    {{ $discounts->links() }}
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
    function deleteDiscount(id) {
        var url = "{{ route('discounts.index') }}" + '/' + id;
        $('#deleteForm').attr('action', url)
    }

</script>
@endsection
