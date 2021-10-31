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
