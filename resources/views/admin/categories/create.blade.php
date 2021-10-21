@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
            <div class="card-header py-3">
                <h6 class="mb-0">Add Product Category</h6>
            </div>
            <div class="col-12 col-lg-4 d-flex">
                <div class="card border shadow-none w-100">
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-12">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Category name">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Slug</label>
                                <input type="text" class="form-control" placeholder="Slug name">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Parent</label>
                                <select class="form-select">
                                    <option>Fashion</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Sports</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3" cols="3"
                                    placeholder="Product Description"></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
