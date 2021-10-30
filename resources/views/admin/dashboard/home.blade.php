@extends('admin.include.layout')
@section('main')
<div class="wrapper">
    <!--start content-->
    <main class="page-content">

        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Tổng đơn đặt hàng trong tháng</p>
                                <h4 class="mb-0 text-primary">{{ $current_orders }}</h4>
                            </div>
                            <div class="ms-auto fs-2 text-primary">
                                <i class="bi bi-cart-check"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Tổng doanh thu trong tháng</p>
                                <h4 class="mb-0 text-success">{{ number_format($current_sales) }}&ensp;<u>đ</u></h4>
                            </div>
                            <div class="ms-auto fs-2 text-success">
                                <i class="bi bi-piggy-bank"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
        <div class="container" style="background-color:#fff;max-witdh:1000px !important">
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-6 d-flex" style="width:66.5%;height:500px">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Doanh thu</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex">
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class="fas fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form action="{{ route('excel.export_latest_orders') }}" method="post">
                                                    @csrf
                                                    <input type="submit" value="Xuất ra Excel lịch sử order 5 tháng gần nhất" class="dropdown-item">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-3 mt-4">
                            <canvas id="bar-chart" width="270" height="100"></canvas>
                        </div>
                        <div class="bg-light p-3 radius-10 mt-3">
                            <p class="mb-0 text-center">Biểu đồ thể hiện doanh thu 5 tháng gần nhất</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-4 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                        <div class="row g-3 align-items-center">
                            <div class="col">
                                <h5 class="mb-0">Thống kê đơn hàng</h5>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                    {{-- <div class="dropdown">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Xuất file Excel</a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="position: relative;">
                        <div id="chart2" style="min-height: 250.7px;">
                            <div id="apexchartsl4v1scsm" class="apexcharts-canvas apexchartsl4v1scsm apexcharts-theme-light" style="width: 487px; height: 250.7px;">
                                <div id="apexchartstkj3glt1" class="apexcharts-canvas apexchartstkj3glt1 apexcharts-theme-light" style="width: 350px; height: 250.7px;">
                                    <canvas id="pie-chart" width="300" height="150"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 520px; height: 284px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </main>
    <!--end page main-->

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
    <!--End Back To Top Button-->

</div>
@endsection
@section('scripts')
<script>
    let labels = '<?= $labels ?>';
    let data = '<?= $data ?>';
    const myChart = new Chart(document.getElementById("bar-chart"), {
        type: 'bar'
        , data: {
            labels: JSON.parse(labels)
            , datasets: [{
                label: "Doanh thu ( VND )"
                , backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"]
                , data: JSON.parse(data)
            }]
        }
        , options: {
            legend: {
                display: false
            }
            , title: {
                display: true
                , text: '5 month'
            }
        }
    });
    let statics = '<?= $statics ?>';
    const pipeChart = new Chart(document.getElementById("pie-chart"), {
        type: 'pie'
        , data: {
            labels: ["Đang chờ", "Đang vận chuyển", "Thành công"]
            , datasets: [{
                label: "( Đơn )"
                , backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f"]
                , data: JSON.parse(statics)
            }]
        }
        , options: {
            title: {
                display: true
                , text: '5 month'
            }
        }
    });

</script>
@endsection
