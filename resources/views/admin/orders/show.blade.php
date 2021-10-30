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
                            <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('create.item', $order_id) }}" class="btn btn-primary">Thêm chi tiết đơn hàng</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline my-2 my-lg-0">
                        <button style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                            kiếm</button>
                        <input style="width: 300px; margin-right: 10px; float:right" class="form-control"
                            action="{{ route('orderItems.index') }}" method="GET" name="orderItem" type="text"
                            placeholder="Tìm kiếm theo tên">
                        </select>
                    </form>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card">
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
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá mỗi sản phẩm</th>
                                                    <th>Số lượng</th>
                                                    <th>Mã đơn hàng</th>
                                                    <th>Ngày tạo</th>
                                                    <th>Ngày cập nhật</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orderItems as $key => $orderItem)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ $orderItem->product->name }}</td>
                                                        <td>{{ $orderItem->price }}</td>
                                                        <td>{{ $orderItem->quantity }}</td>
                                                        <td>{{ $orderItem->order->code }}</td>

                                                        <td>{{ date('d-m-Y', strtotime($orderItem->created_at)) }}</td>
                                                        <td>
                                                            @if ($orderItem->updated_at != '')
                                                                {{ date('d-m-Y', strtotime($orderItem->updated_at)) }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                                <a href="{{ route('orderItems.edit', $orderItem->id) }}"
                                                                    class="text-warning" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Edit info" aria-label="Edit"><i
                                                                        class="bi bi-pencil-fill"></i></a>

                                                                <a href="#"
                                                                    onclick="deleteOrderItems({{ $orderItem->id }})"
                                                                    class="text-danger" data-bs-toggle="modal"
                                                                    data-bs-target="#deleteorderItems">
                                                                    <i class="bi bi-trash-fill"></i></a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- Test Modal Delete --}}
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteorderItems" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa không
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Hành động này sẽ không thể thu hồi !
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Hủy</button>
                                                    <form id="deleteForm" action="#" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="hidden" id="order_id_delete">
                                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    {{-- <div class=" box-footer clearfix" style="float:right"> --}}
                                    {{-- {{ $orderItems->links() }} --}}
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <a href="{{ route('orders.index') }}" style="float:right" class="btn btn-danger">Trở về </a>
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
        // console.log(window.location.hef)
        function deleteOrderItems(id) {
            var url = '{{ route('orderItems.index') }}' + '/' + id;
            $('#deleteForm').attr('action', url)
            let path = window.location.pathname
            let order_id = path[path.length - 1]
            $('#order_id_delete').val(order_id)

        }
    </script>
@endsection --}}
