@extends('include.layout')
@section('title', 'Về chúng tôi')
@section('main')

<body class="page-inner">
    <div class="wrapper">
        <main class="site-main about-us">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="{{ route('index') }}">Trang chủ</a></li>
                    <li class="active"><a href="#">Giới thiệu</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="banner-paralax">
                    <a href="#"><img src="{{asset('images/banner.jpg')}}" alt="banner-paralax"></a>
                </div>
            </div>
            <div class="container">
                <div class="about-text">
                    <span class="about-text-center">Về chúng tôi</span>
                    <p>Horizon hoạt động trên mô hình B2C (viết tắt của cụm từ Business to Customer). Đối tượng hướng tới của chúng tôi
                        là người tiêu dùng. Horizon được xây dựng nhằm cung cấp cho người dùng những trại nghiệm mua hàng nhanh chóng và tốt nhất.
                        Chúng tôi có niềm tin mạnh mẽ rằng trải nghiệm mua sắm trực tuyến phải đơn giản, dễ dàng và mang đến cảm xúc vui thích.
                        Niềm tin này truyền cảm hứng và thúc đẩy chúng tôi mỗi ngày tại Horizon.
                    </p>
                    <p>Chúng tôi thật sự tin tưởng vào sức mạnh khai triển của công nghệ và mong muốn góp phần làm cho thế giới trở nên tốt đẹp
                        hơn bằng việc kết nối cộng đồng người mua và người bán thông qua việc cung cấp một nền tảng thương mại điện tử.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-text-item">
                            <h5 class="title-about-us">What we really do?</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock,</p>
                        </div>
                        <div class="about-text-item">
                            <h5 class="title-about-us">Lịch sử của công ty</h5>
                            <p>Công ty ra đời năm 2021 trong bối cảnh dịch bệnh covid đang là vấn đề nhức nhối đối với cộng đồng
                                và nhu cầu mua hàng trên các trang mua bán hiện nay chưa an toàn.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-text-item">
                            <h5 class="title-about-us">Tầm nhìn của chúng tôi</h5>
                            <p>Chúng tôi muốn trở thành trang thương mại điện tử lớn nhất Việt Nam.</p>
                        </div>
                        <div class="about-text-item">
                            <h5 class="title-about-us">Vị Trí của Chúng Tôi</h5>
                            <p>Đối với người dùng trong khu vực, Shopee mang đến trải nghiệm mua sắm tích hợp với vô số sản phẩm đa dạng chủng loại,
                                cộng đồng người dùng năng động và chuỗi dịch vụ liền mạch.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-text-item item-three">
                            <h5 class="title-about-us">Tiêu chuẩn chúng tôi</h5>
                            <div class="about-text-content">
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Hỗ trợ 24/7</h4>
                                    <div class="text-info">Với cộng đồng sử dụng nhiều và nhân viên đông nên khi gặp bất cứ vấn đề gì đều được giải đáp
                                        ngay
                                    </div>
                                </div>
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Chất lượng tốt nhất</h4>
                                    <div class="text-info">Mọi sản phẩm trên trang web đều được kiểm định rõ ràng
                                    </div>
                                </div>
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Giao hàng nhanh nhất</h4>
                                    <div class="text-info">Với sự liên kết với các công ty vận tải lớn nên tốc độ giao hàng của Horizon hơn 30% so với các đối thủ
                                    </div>
                                </div>
                                <div class="about-text-info">
                                    <h4 class="about-text-title">Dịch vụ hậu mãi tốt nhất</h4>
                                    <div class="text-info">Luôn quan tâm và cảm ơn khách hàng bằng nhiều chương trình giảm giá.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('include.footer')
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
    <!-- jQuery -->
</body>
@endsection
