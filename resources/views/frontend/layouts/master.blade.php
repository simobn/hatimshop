<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('frontend.layouts.head')
    @yield('extra-styles')
</head>
<body class="js">

<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- End Preloader -->

@include('frontend.layouts.notification')
<!-- Header -->
@include('frontend.layouts.header')
<!--/ End Header -->
@yield('main-content')

@include('frontend.layouts.footer')
<script>
    $("select#langs").change(function () {

        let text = window.location.pathname;
        let replacer = $(this).children(":selected").val();

        let result = replacer.concat(text.slice(3));
        window.location = window.location.protocol + '//' + window.location.host + '/' + result;

    });
</script>
</body>
</html>
