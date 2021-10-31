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
            <div class="col-md-12">
                <form class="form-inline my-2 my-lg-0">
                    <button id="seach_button" style="float:right" class="btn btn-outline-success my-2 my-sm-0" type="button">Tìm
                        kiếm</button>
                    <input id="seach_input_category" style="width: 300px; margin-right: 10px; float:right" class="form-control" name="seach_input_category" type="text" placeholder="Tìm kiếm danh mục sản phẩm">
                    <select name="type_seach" style="width: 160px; margin-right: 10px; float:right" class="form-select" id="type_seach">
                        <option value="0">Tất cả</option>
                        <option value="1">Tên danh mục</option>
                        <option value="2">Danh mục tổng</option>
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
                        <div class="card border shadow-none w-100" id="monitor">
                            <div class="card-body">
                                <div class="table-responsive">
                                    @if (isset($categories))
                                    <table class="table ">
                                        <thead class="table-light">

                                            <tr>
                                                <th>#</th>
                                                <th>Tên</th>
                                                <th>Mô tả</th>
                                                <th>Thuộc danh mục</th>
                                                <th>Trạng thái</th>
                                                <th>Ngày cập nhật</th>
                                                <th>Hành động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($categories) > 0)
                                            @foreach ($categories as $key => $category)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{!! $category->description !!}</td>
                                                <td>{{ $categories_arr[$category->parent_id] }}</td>
                                                <td>
                                                    @if ($category->status == 0)
                                                    <span class='text text-success'>Hiển thị</span>
                                                    @else
                                                    <span class='text text-success'>Ẩn</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($category->updated_at != '')
                                                    {{ date('d-m-Y', strtotime($category->updated_at)) }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center gap-3 fs-6">
                                                        <a href="{{ route('categories.edit', $category->id) }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                        <form action="{{ route('categories.destroy', [$category->id]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="#" onclick="deleteCategory({{ $category->id }})" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteCategory"> <i class="bi bi-trash-fill"></i></a>
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
                                <div class="modal fade" id="deleteCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        var url = "{{ route('categories.index') }}" + '/' + id;
        $('#deleteForm').attr('action', url)
    }
    $("#seach_button").on('click', function() {
        let url = "{{ route('category.seach') }}";
        let seach_data = $("#seach_input_category").val();
        let type_seach = $("#type_seach").val();
        console.log(type_seach);
        $.ajax({
            url: url
            , method: 'GET'
            , data: {
                seach_data: seach_data
                , type_seach: type_seach
            }
            , success: function(response) {
                $("#monitor").html('');
                $("#monitor").html(response);
            }
        })
    })

</script>
@endsection
