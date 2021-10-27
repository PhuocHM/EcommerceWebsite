@extends('include.layout')
@section('title', 'Danh mục')
@section('main')

<body class="page-product grid-view">
    <div class="wrapper">
        <div style="display:none;">
            <button id="noti-button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="noti-main">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Tiếp tục mua hàng</button>
                    </div>
                </div>
            </div>
        </div>
        <form id="block-search-mobile" method="get" class="block-search-mobile">
            <div class="form-content">
                <div class="control">
                    <a href="#" class="close-block-serach"><span class="icon flaticon-close"></span></a>
                    <input type="text" name="search" placeholder="Search" class="input-subscribe">
                    <button type="submit" class="btn search">
                        <span><i class="flaticon-magnifying-glass" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </form>
        <div id="block-quick-view-popup" class="block-quick-view-popup">
            <div class="quick-view-content">
                <a href="#" class="popup-btn-close"><i class="fas fa-times"></i></a>
                <div class="product-items">
                    <div class="product-image">
                        <a href="#"><img src="{{asset('images/popup-pro.jpg')}}" alt="p1"></a>
                    </div>
                    <div class="product-info">
                        <div class="product-name"><a href="#">Photo Camera</a></div>
                        <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                        <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to Wishlist</a>
                        <div class="product-infomation">
                            Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black and
                            Decker FireStorm line of 12V tools allowing...
                        </div>
                    </div>
                    <div class="product-info-price">
                        <span class="price">
                            <ins>$229.00</ins>
                            <del>$259.00</del>
                        </span>
                        <div class="quantity">
                            <h6 class="quantity-title">Quantity:</h6>
                            <div class="buttons-added">
                                <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                            </div>
                        </div>
                        <a href="#" class="btn-add-to-cart">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <main class="site-main product-list product-grid">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="index.html">Home </a></li>
                    <li class="active"><a href="#">Danh sách sản phẩm </a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="col-sidebar">
                            <div class="filter-options">
                                <div class="block-title">Shop by</div>
                                <form action="#" id="form_attribute" method="GET">
                                    @foreach($attributes as $key => $attribute)
                                    <div class="block-content">
                                        <div class="filter-options-item filter-categori">
                                            <div class="filter-options-title">{{ $attribute->name }}</div>
                                            <div class="filter-options-content">
                                                <ul>
                                                    @foreach($attribute->product as $key => $value)
                                                    <li><label class="inline">
                                                            <input @if( $filter_attributes !=null) @if(in_array($value->pivot->content,$filter_attributes))
                                                            checked
                                                            @endif
                                                            @endif
                                                            type="checkbox" class="checkBox" name="attribute_content[]" value="{{ $value->pivot->content }}"><span class="input"></span>{{ $value->pivot->content }}
                                                        </label></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </form>
                            </div>
                            <div class="block-banner-sidebar">
                                <a href="#"><img src="{{asset('images/product/banner-sidebar.jpg')}}" alt="banner-sidebar"></a>
                                <div class="promotion-banner-inner">
                                    <h4>Fly Drone</h4>
                                    <h3>Tincidunt interdum senectus fames sociis sem platea </h3>
                                    <a class="banner-link" href="grid-product.html">Shop now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 float-none float-right">
                        <div class="main-content">
                            <div class="promotion-banner style-3">
                                <a href="#" class="banner-img"><img src="{{asset('images/product/banner-product.jpg')}}" alt="banner-product"></a>
                                <div class="promotion-banner-inner">
                                    <h4>Top Staff Pick</h4>
                                    <h3>Best Watches Collection</h3>
                                    <a class="banner-link" href="grid-product.html">Shop now</a>
                                </div>
                            </div>
                            <div class="toolbar-products">
                                <h4 class="title-product">Grid Category</h4>
                                <div class="toolbar-option">
                                    <div class="toolbar-sort">
                                        <select title="sort" class="chosen-select sorter-options form-control">
                                            <option selected="selected" value="position">Sort by popularity</option>
                                            <option value="name">Name</option>
                                            <option value="price">Price</option>
                                        </select>
                                    </div>
                                    <div class="toolbar-per">
                                        <select title="limit" class="chosen-select limiter-options form-control">
                                            <option selected="selected" value="6">20 per page</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="products products-list products-grid equal-container auto-clear">
                                {{-- {{dd($category_products->first())}} --}}
                                @if($category_products->first() == null)
                                <span style="color:red;">Không có sản phẩm nào</span>
                                @else
                                @foreach($category_products as $key => $product)
                                <div class="product-item style1 width-33 col-md-4 col-sm-6 col-xs-6 equal-elem">
                                    <div class="product-inner">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="#"><img src="{{asset($product->cover2Image->first()->image)}}" alt="p8"></a>
                                            </div>
                                            @if ($product->discount && $product->discount->first())
                                            <span class="onsale">-{{number_format($product->discount->first()->amounts ) }}&ensp;VND</span>
                                            @endif
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="{{ route('product-detail.show',$product->id) }}">{{$product->name}}
                                                </a></div>
                                            <span class="price">

                                                @if ($product->discount && $product->discount->first())
                                                <ins>{{ number_format($product->price - $product->discount->first()->amounts) }}&ensp;<u>đ</u></ins>
                                                <del>{{ number_format($product->price )}}&ensp;<u>đ</u></del>
                                                @else
                                                <ins>{{ number_format($product->price) }}&ensp;<u>đ</u></ins>
                                                @endif
                                            </span>
                                            <span class="star-rating">

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <i class="fa fa-star" aria-hidden="true"></i>

                                                <span class="review">5 Review(s)</span>

                                            </span>
                                            <div class="info-product">
                                                <p>Weigh: 8.25 kg</p>
                                                <p>Size: One Size Fits All </p>
                                                <p>Guarantee: 2 Year</p>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <button type="button" onclick="addToCart({{ $product->id }})" class="btn-add-to-cart">Add to cart</button>
                                                <a href="compare.html" class="compare"><i class="fa fa-exchange"></i>Compare</a>
                                                <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="pagination d-flex justify-content-end">
                                {{ $category_products->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main><!-- end MAIN -->
        <!-- FOOTER -->
        @include('include.footer')
        <!-- end FOOTER -->
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
</body>
@endsection
@section('script')
<script>
    $(function() {
        $('.checkBox').on('change', function() {
            event.preventDefault();
            $('#form_attribute').submit();
        });
    });

</script>
@endsection
