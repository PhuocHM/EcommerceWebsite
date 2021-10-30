<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/function.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
@include('include.header')
@yield('main')

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.actual.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.elevateZoom.min.js')}}"></script>
<script src="{{asset('js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script type="text/javascript" src="{{asset('js/Modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.countdown.js')}}"></script>
{{-- Jquery UI --}}
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@yield('script')
<script>
    // Auto Complete
    $("#seach_input").autocomplete({
        source: "{{ route('home.seach') }}"
        , minLength: 2
        , select: function(event, ui) {
            // 
        }
    }).autocomplete("instance")._renderItem = function(ul, item) {
        var url = `{{ route('product-detail.index') }}`;
        return $("<li>")
            .append(`<a href="` + url + `/` + item.id + `">` + item.name + `</a></li>`)
            .appendTo(ul);
    };;

    function checkCoupon() {
        var url = `{{ route('coupon.checkCoupon') }}`;
        var coupon_code = $("#coupon_code_input").val();
        var total = $("#total_money").val();
        $.ajax({
            url: url
            , method: 'GET'
            , data: {
                coupon_code: coupon_code
            }
            , success: function(response) {
                if (response.success) {
                    total = total - response.success;

                    $("#total_money").val(total);
                    $("#display_total_money").html(new Intl.NumberFormat('vi-VN', {
                        style: 'currency'
                        , currency: 'VND'
                    }).format(total));
                    $("#success_coupon").html('<p>Đã sử dụng mã giảm giá : Giảm ' + response.success + '&ensp;<u>đ</u></p>')
                    $("#success_coupon").show();
                    setTimeout(function() {
                        $("#success_coupon").hide();
                    }, 1500)
                } else {
                    $("#message_coupon").html('<p>' + response.error + '</p>')
                    $("#message_coupon").show();
                    setTimeout(function() {
                        $("#message_coupon").hide();
                    }, 1500)
                }
            }
        })
    }

    function deleteSessionCoupon() {
        var url = `{{ route('order.deleteSession') }}`;
        let before_total_money = $("#before_total_money").val();
        $("#total_money").val(before_total_money);
        $("#display_total_money").html(new Intl.NumberFormat('vi-VN', {
            style: 'currency'
            , currency: 'VND'
        }).format(before_total_money));
        $.ajax({
            url: url
            , method: 'GET'
            , success: function(response) {
                if (response.success) {
                    //   
                } else {
                    //   
                }
            }
        })
    }

    function hasCoupon() {

        if ($('#checkbox_coupon').is(":checked"))
            $("#coupon_main").show();
        else
            $("#coupon_main").hide();
    }

    function checkCart() {
        var url = `{{ route('cart.checkCart') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , success: function(response) {
                $("#mini-cart").html(response)
            }
        })
    }

    function deleteCartItem(product_id) {
        var url = `{{ route('cart.deleteCartItem') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , data: {
                product_id: product_id
            }
            , success: function(response) {
                checkCart();
            }
        })
    }

    function addToCart(product_id) {
        var url = `{{ route('cart.addToCart') }}`;
        $.ajax({
            url: url
            , method: 'GET'
            , data: {
                product_id: product_id
            }
            , success: function(response) {
                if (response.success) {
                    $("#noti-main").html('Đã thêm ' + response.success.name + ' vào giỏ hàng !')
                    checkCart();
                    $("#noti-button").trigger("click");
                } else {
                    //
                }
            }
        })
    }

    $(document).ready(function() {
        checkCart();
    });

</script>
</html>
