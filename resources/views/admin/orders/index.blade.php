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
                            <li class="breadcrumb-item active" aria-current="page">Thông Tin Đơn Hàng</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline my-2 my-lg-0">
                        <button style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                            kiếm</button>
                        <input style="width: 300px; margin-right: 10px; float:right" class="form-control"
                            action="{{ route('orders.index') }}" method="GET" name="order" type="text"
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
                                                    <th>Mã</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Tổng giá đơn hàng</th>
                                                    <th>Trạng thái</th>
                                                    <th>Ngày tạo</th>
                                                    <th>Ngày cập nhật</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->code }}</td>
                                                        <td>{{ $order->customer->name }}</td>
                                                        <td>{{ $order->payment_method }}</td>
                                                        <td>{{ $order->total_price }}</td>
                                                        {{-- <td> --}}
                                                            {{-- @if ($order->status == 0)
                                                                <form>
                                                                    @csrf
                                                                    <select name="status"
                                                                        data-order_id="{{ $order->id }}"
                                                                        class="custom-select status">
                                                                        <option selected value="0">Đang chờ</option>
                                                                        <option value="1">Đang vận chuyển</option>
                                                                        <option value="2">Vận chyển xong</option>
                                                                    </select>
                                                                </form>
                                                            @elseif($order->status==1)
                                                                <form>
                                                                    @csrf
                                                                    <select name="status"
                                                                        data-order_id="{{ $order->id }}"
                                                                        class="custom-select status">
                                                                        <option value="0">Đang chờ</option>
                                                                        <option selected value="1">Đang vận chuyển</option>
                                                                        <option value="2">Vận chyển xong</option>
                                                                    </select>
                                                                </form>
                                                            @else
                                                                <form>
                                                                    @csrf
                                                                    <select name="status"
                                                                        data-truyen_id="{{ $order->id }}"
                                                                        class="custom-select status">
                                                                        <option value="0">Đang chờ</option>
                                                                        <option value="1">Đang vận chuyển</option>
                                                                        <option selected value="2">Vận chyển xong</option>
                                                                    </select>
                                                                </form>
                                                            @endif --}}
                                                        {{-- </td> --}}
                                                        <td>
                                                            @if ($order->status == 0)
                                                                <span class='text text-success'>Đang chờ</span>
                                                            @elseif ($order->status == 1)
                                                                <span class='text text-success'>Đang vận chuyển</span>
                                                            @else    
                                                                 <span class='text text-success'>Đã hoàn thành</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ date('d-m-Y', strtotime($order->created_at)) }}</td>
                                                        <td>
                                                            @if ($order->updated_at != '')
                                                                {{ date('d-m-Y', strtotime($order->updated_at)) }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                                <a href="{{ route('orders.show', $order->id) }}" class="text-primary"
                                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                    title="" data-bs-original-title="View detail"
                                                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                                                <a href="{{ route('orders.edit', $order->id) }}"
                                                                    class="text-warning" data-bs-toggle="tooltip"
                                                                    data-bs-placement="bottom" title=""
                                                                    data-bs-original-title="Edit info" aria-label="Edit"><i
                                                                        class="bi bi-pencil-fill"></i></a>
                                                                <form
                                                                    action="{{ route('orders.destroy', [$order->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <a href="#" onclick="deleteOrder({{ $order->id }})"
                                                                        class="text-danger" data-bs-toggle="modal"
                                                                        data-bs-target="#deleteorder"> <i
                                                                            class="bi bi-trash-fill"></i></a>
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
                                    <div class="modal fade" id="deleteorder" tabindex="-1"
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
                                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                                    <div class=" box-footer clearfix" style="float:right">
                                        {{ $orders->links() }}
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
        function deleteOrder(id) {
            var url = '{{ route('orders.index') }}' + '/' + id;
            $('#deleteForm').attr('action', url)
        }
    </script>
@endsection