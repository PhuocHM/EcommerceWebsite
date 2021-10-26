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

</head>
@include('include.header')
@yield('main')
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
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
<script type="text/javascript" src="{{asset('js/function.js')}}"></script>
<script type="text/javascript" src="{{asset('js/Modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.plugin.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.countdown.js')}}"></script>
@yield('script')
<script>
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
    $(document).ready(function() {
        checkCart();
    });

</script>
</html>
