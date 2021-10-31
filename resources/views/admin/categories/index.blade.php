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
                            <li class="breadcrumb-item active" aria-current="page">&ensp;Danh mục sản phẩm</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm danh mục</a>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-3">
                    <form class="form-inline my-2 my-lg-0">
                        <select name="sort" id="sort" class="form-control">
                            <option value="{{ Request::url() }}?sort_by={{ $sort_by }}">{{ $name_sort }}</option>
                            <option value="{{Request::url()}}?sort_by=newest">--Từ cũ đến mới--</option>
                         <option value="{{Request::url()}}?sort_by=latest">--Từ mới đến cũ--</option>
                            <option value="{{Request::url()}}?sort_by=name_a_to_z">Lọc theo tên A đến Z</option>
                            <option value="{{Request::url()}}?sort_by=name_z_to_a">Lọc theo tên Z đến A</option>
                         <option value="{{Request::url()}}?sort_by=category_a_to_z">Lọc theo danh mục A đến Z</option>
                         <option value="{{Request::url()}}?sort_by=category_z_to_a">Lọc theo danh mục Z đến A</option>
                        </select>
                    </form>
                </div>

                <div class="col-md-9">
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
                                        @if (isset($categories))
                                            <table class="table " >
                                                <thead class="table-light">

                                                    <tr>
                                                        <th>#</th>
                                                        <th>Tên</th>

                                                        <th>Mô tả</th>
                                                        <th>Thuộc danh mục</th>
                                                        <th>Trạng thái</th>
                                                        <th>Ngày tạo</th>
                                                        <th>Ngày cập nhật</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (count($categories) > 0)
                                                        @foreach ($categories as $key => $category)
                                                            <tr >
                                                                <td>{{ ++$key }}</td>
                                                                <td>{{ $category->name }}</td>
                                                                <td>{{ $category->description }}</td>
                                                                <td>{{ $categories_arr[$category->parent_id] }}</td>
                                                                <td>
                                                                    @if ($category->status == 0)
                                                                        <span class='text text-success'>Hiển thị</span>
                                                                    @else
                                                                        <span class='text text-success'>Ẩn</span>
                                                                    @endif
                                                                </td>
                                                                <td>{{ date('d-m-Y', strtotime($category->created_at)) }}
                                                                </td>
                                                                <td>
                                                                    @if ($category->updated_at != '')
                                                                        {{ date('d-m-Y', strtotime($category->updated_at)) }}
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-center gap-3 fs-6">
                                                                        <a href="{{ route('categories.edit', $category->id) }}"
                                                                            class="text-warning" data-bs-toggle="tooltip"
                                                                            data-bs-placement="bottom" title=""
                                                                            data-bs-original-title="Edit info"
                                                                            aria-label="Edit"><i
                                                                                class="bi bi-pencil-fill"></i></a>
                                                                        <form
                                                                            action="{{ route('categories.destroy', [$category->id]) }}"
                                                                            method="POST">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <a href="#"
                                                                                onclick="deleteCategory({{ $category->id }})"
                                                                                class="text-danger"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#deleteCategory"> <i
                                                                                    class="bi bi-trash-fill"></i></a>
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <h3>Danh Mục sản phẩm cần tìm không có</h3>
                                                    @endif
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>
                                    {{-- Test Modal Delete --}}
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteCategory" tabindex="-1"
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
                                        {{ $categories->links() }}
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
        function deleteCategory(id) {
            var url = '{{ route('categories.index') }}' + '/' + id;
            $('#deleteForm').attr('action', url)
        }
    </script>
@endsection
