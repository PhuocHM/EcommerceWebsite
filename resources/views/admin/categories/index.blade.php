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
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('categories.create')}}"  class="btn btn-primary">Thêm danh mục</a>                                             
                    </div>                                 
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
                                                    <th>Tên</th>
                                                    <th>Slug</th>
                                                    <th>Mô tả</th>
                                                    <th>Parent_id</th>
                                                    <th>Trạng thái</th>
                                                    <th>Ngày tạo</th>
                                                    <th>Ngày cập nhật</th>
                                                    <th>Hành động</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td>{{$category->id}}</td>
                                                        <td>{{$category->name}}</td>
                                                        <td>{{$category->slug}}</td>
                                                        <td>{{$category->description}}</td>
                                                        <td>{{$categories_arr[$category->parent_id]}}</td>
                                                        <td>
                                                            @if ($category->status == 0)
                                                                <span class='text text-success'>Hiển thị</span>
                                                            @else
                                                                <span class='text text-success'>Ẩn</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ date('d-m-Y', strtotime($category->created_at)) }}</td>
                                                        <td>
                                                            @if($category->updated_at !='')
                                                            {{ date('d-m-Y', strtotime($category->updated_at)) }}
                                                            @endif
                                                         </td>
                                                        <td>
                                                            <div class="d-flex align-items-center gap-3 fs-6">
                                                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                                              <a href="{{ route('categories.edit', $category->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                              <form action="{{route('categories.destroy',[$category->id])}}" method="POST">
                                                                    @method('DELETE')
                                                                     @csrf
                                                             <button onclick="return confirm('Bạn muốn xóa danh mục này không?');" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete" href ='#'> <i  class="bi bi-trash-fill"></i></button>
                                                              </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class=" box-footer clearfix" style="float:right">
                                        {{-- {{ $categories->links() }} --}}
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