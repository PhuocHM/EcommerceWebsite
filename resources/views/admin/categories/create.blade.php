@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Add Product Category</h6>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
               
            <div class="col-12 col-lg-12 d-flex">
                <div class="card border shadow-none w-100">
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('categories.store')}}">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" onkeyup="ChangeToSlug();" id="slug"  placeholder="Tên danh muc">
                                <span style="color:red;">@error("name"){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="convert_slug"  placeholder="Slug danh muc">
                                <span style="color:red;">@error("slug"){{ $message }} @enderror</span>
                            <div class="col-12">
                                <label class="form-label">Mô tả</label>
                                <input type="text" class="form-control" name="description" placeholder="Slug name">
                                <span style="color:red;">@error("description"){{ $message }} @enderror</span>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Parent</label>
                                <select name="parent_id"  class="form-select" id="inputGroupSelect02">
                                    <option value="0">Danh mục cha</option>
                            @foreach($categories as $category)
                
                        
                            <option value="{{$category->id}}">{{$category->name}}</option>
            
                            @endforeach 
                            </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" >Kích hoạt danh mục</label>
                                <select name="status" class="form-select" id="inputGroupSelect02">
                            
                                    <option value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection