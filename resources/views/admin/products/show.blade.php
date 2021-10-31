@extends('admin.include.layout')
@section('main')
    <div class="wrapper">
        <main class="page-content">
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
            </div>
            <div class="card mt-3">
                <div class="row">
                    <div class="col-12 d-flex">
                        <div class="card border shadow-none w-100">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Thông tin</th>
                                            <th>Nội dung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Danh mục</td>
                                            <td>{{ $product->category->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Mã sản phẩm</td>
                                            <td>{{ $product->code }}</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Tên sản phẩm</td>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Thương hiệu</td>
                                            <td>{{ $product->brand->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Hình ảnh</td>
                                            <td>
                                                @foreach ($product->productImage as $value)
                                                    <img src="{{ asset($value->image) }}" alt="" style="width: 150px">
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Thông số</td>
                                            <td>
                                                @foreach ($product->attribute as $value)
                                                    {{ $value->name }} : {{ $value->pivot->content }} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Mô tả sản phẩm</td>
                                            <td>{!! $product->description !!}</td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Nhà cung cấp</td>
                                            <td>
                                                @if (isset($product->supplier->first()->name))
                                                    {{ $product->supplier->first()->name }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Số lượng còn</td>
                                            <td>
                                                @if (isset($product->supplier->first()->pivot->quantity))
                                                    {{ $product->supplier->first()->pivot->quantity }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Số lượng đã bán</td>
                                            <td>{{ $product->sold }}</td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Giá nhập (VNĐ)</td>
                                            <td>
                                                @if (isset($product->supplier->first()->pivot->cost_price))
                                                    {{ number_format($product->supplier->first()->pivot->cost_price) }}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Giá bán (VNĐ)</td>
                                            <td>{{ number_format($product->price) }}</td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Chương trình khuyến mãi</td>
                                            <td>
                                                @if (isset($product->discount->first()->name))
                                                    {{ $product->discount->first()->name }}
                                                @else
                                                    Không áp dụng khuyến mãi
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end">
                        <button class="btn btn-danger " onclick="window.history.go(-1); return false;">Quay
                            lại</button>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
@endsection
