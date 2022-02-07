<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
{{--<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">--}}

<!-- StyleSheet -->
{{--<link rel="manifest" href="/manifest.json">--}}
<!-- Bootstrap -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">--}}
<!-- Magnific Popup -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">--}}
<!-- Font Awesome -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">--}}
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<!-- Fancybox -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">--}}
<!-- Themify Icons -->
<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
<!-- Nice Select CSS -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}">--}}
<!-- Animate CSS -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">--}}
<!-- Flex Slider CSS -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/flex-slider.min.css')}}">--}}
<!-- Owl Carousel -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">--}}
<!-- Slicknav -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">--}}
<!-- Jquery Ui -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">

<!-- Eshop StyleSheet -->
{{--<link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">--}}
{{--<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">--}}
{{--<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">--}}
{{--<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>--}}
<style>
    .dropbtn {
        color: white;
        padding: 4px;
        font-size: 10px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover, .dropbtn:focus {
        background-color: #2980B9;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
</style>
@stack('styles')
