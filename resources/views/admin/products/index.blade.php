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
                            <li class="breadcrumb-item active" aria-current="page">&ensp;Chi tiết sản phẩm</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-inline my-2 my-lg-0">
                        <button style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm
                            kiếm</button>
                        <input style="width: 300px; margin-right: 10px; float:right" class="form-control"
                            action="{{ route('products.index') }}" method="GET" name="product" type="text"
                            placeholder="Tìm kiếm theo tên sản phẩm">
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
                                        @if (isset($products))
                                            <table class="table ">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Mã</th>
                                                        <th>Tên</th>

                                                        <th>Danh mục</th>
                                                        <th>Thương hiệu</th>
                                                        <th>Đã bán</th>
                                                        <th>Giá</th>
                                                        <th>Mô tả</th>
                                                        <th>Trạng thái</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Ngày cập nhật</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (count($products) > 0)
                                                        @foreach ($products as $key => $product)
                                                            <tr>
                                                                <td>{{ ++$key }}</td>
                                                                <td>{{ $product->code }}</td>
                                                                <td>{{ $product->name }}</td>

                                                                <td>{{ $product->category->name }}</td>
                                                                <td>{{ $product->brand->name }}</td>
                                                                <td>{{ $product->sold }}</td>
                                                                <td>{{ $product->price }}</td>
                                                                <td>{{ $product->description }}</td>
                                                                <td>
                                                                    @if ($product->status == 0)
                                                                        <span class='text text-success'>Hiển thị</span>
                                                                    @else
                                                                        <span class='text text-success'>Ẩn</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('d-m-Y', strtotime($product->created_at)) }}
                                                                </td>
                                                                <td>
                                                                    @if ($product->updated_at != '')
                                                                        {{ date('d-m-Y', strtotime($product->updated_at)) }}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center gap-3 fs-6">
                                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                                            class="text-warning" data-bs-toggle="tooltip"
                                                                            data-bs-placement="bottom" title=""
                                                                            data-bs-original-title="Edit info"
                                                                            aria-label="Edit"><i
                                                                                class="bi bi-pencil-fill"></i></a>
                                                                        <form
                                                                            action="{{ route('products.destroy', [$product->id]) }}"
                                                                            method="POST">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <a href="#"
                                                                                onclick="deleteProduct({{ $product->id }})"
                                                                                class="text-danger"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteProduct"> <i
                                                                                    class="bi bi-trash-fill"></i></a>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <h3>Sản phẩm cần tìm không có</h3>
                                                    @endif
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                    {{-- Test Modal Delete --}}
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteProduct" tabindex="-1"
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
                                    <div class="pagination-block" style="float:right">
                                        {{ $products->links() }}
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
        function deleteProduct(id) {
            var url = '{{ route('products.index') }}' + '/' + id;
            $('#deleteForm').attr('action', url)
        }
    </script>
@endsection
