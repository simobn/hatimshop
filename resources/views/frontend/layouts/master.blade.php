<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>

    @include('frontend.layouts.head')
    @yield('extra-styles')
    <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
</head>
<body class="js" dir="{{app()->getLocale() == 'ar' ? 'rtl' : 'ltr'}}">

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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper1 = new Swiper(".swiper1", {
        direction: "horizontal",
        autoHeight: true,
        centeredSlides: true,
        autoplay: {
            delay: 10000,
        },
        slidesPerView: '1',
    });
    const swiper3 = new Swiper(".swiper3", {
        direction: "horizontal",
        autoHeight: true,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 3500,
        },
        slidesPerView: 'auto',
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 60,
            },
            2560: {
                slidesPerView: 5,
                spaceBetween: 70,
            },
        },

        // Navigation arrows
        navigation: {
            nextEl: ".swiper-button-next-t1",
            prevEl: ".swiper-button-prev-t1"
        }

        // And if we need scrollbar
        /*scrollbar: {
        el: '.swiper-scrollbar',
      },*/
    });
</script>
<script>
    $("select#langs").change(function () {

        let text = window.location.pathname;
        let replacer = $(this).children(":selected").val();

        let result = replacer.concat(text.slice(3));
        if (replacer == 'ar') {
            $('body').attr('dir', 'rtl')
        }
        window.location = window.location.protocol + '//' + window.location.host + '/' + result;

    });
</script>
</body>
</html>
