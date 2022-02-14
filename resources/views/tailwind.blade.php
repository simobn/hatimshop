@extends('frontend.layouts.master')
@section('title','E-SHOP || HOME PAGE')
@section('main-content')
    <div class="bg-white">
        {{--        <div class="carousel relative container mx-auto" style="max-width:1600px;">--}}
        {{--            <div class="carousel-inner relative overflow-hidden w-full">--}}
        {{--                <!--Slide 1-->--}}
        {{--                <!--key +1-->--}}
        {{--                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">--}}
        {{--                <div class="carousel-item absolute opacity-0" style="height:50vh;">--}}
        {{--                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1422190441165-ec2956dc9ecc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">--}}

        {{--                        <div class="container mx-auto">--}}
        {{--                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">--}}
        {{--                                <p class="text-black text-2xl my-4">Stripy Zig Zag Jigsaw Pillow and Duvet Set</p>--}}
        {{--                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <!--count-->--}}
        {{--                <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
        {{--                <!--$key+2-->--}}
        {{--                <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

        {{--                <!--Slide 2-->--}}
        {{--                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">--}}
        {{--                <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">--}}
        {{--                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjM0MTM2fQ&auto=format&fit=crop&w=1600&q=80');">--}}

        {{--                        <div class="container mx-auto">--}}
        {{--                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">--}}
        {{--                                <p class="text-black text-2xl my-4">Real Bamboo Wall Clock</p>--}}
        {{--                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
        {{--                <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

        {{--                <!--Slide 3-->--}}
        {{--                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">--}}
        {{--                <div class="carousel-item absolute opacity-0" style="height:50vh;">--}}
        {{--                    <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-bottom" style="background-image: url('https://images.unsplash.com/photo-1519327232521-1ea2c736d34d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1600&q=80');">--}}

        {{--                        <div class="container mx-auto">--}}
        {{--                            <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">--}}
        {{--                                <p class="text-black text-2xl my-4">Brown and blue hardbound book</p>--}}
        {{--                                <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black" href="#">view product</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>--}}
        {{--                <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>--}}

        {{--                <!-- Add additional indicators for each slide-->--}}
        {{--                <ol class="carousel-indicators">--}}
        {{--                    <li class="inline-block mr-3">--}}
        {{--                        <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>--}}
        {{--                    </li>--}}
        {{--                    <li class="inline-block mr-3">--}}
        {{--                        <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>--}}
        {{--                    </li>--}}
        {{--                    <li class="inline-block mr-3">--}}
        {{--                        <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>--}}
        {{--                    </li>--}}
        {{--                </ol>--}}

        {{--            </div>--}}
        {{--        </div>--}}
        @if(count($banners)>0)
            <div class="carousel relative container mx-auto" style="max-width:1600px;">
                <div class="carousel-inner relative overflow-hidden w-full">
                @foreach($banners as $key=>$banner)
                    <!--Slide 1-->
                        <input class="carousel-open" type="radio" id="carousel-{{$key+1}}" name="carousel"
                               aria-hidden="true" hidden=""
                               checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right"
                                 style="background-image: url('{{$banner->photo}}');">

                                <div class="container mx-auto">
                                    <div
                                        class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                                        <h1 class="text-3xl font-bold">{{$banner->title}}</h1>
                                        <p class="text-black text-2xl my-4">{!! html_entity_decode($banner->description) !!}</p>
                                        <a class="text-xl inline-block no-underline border-b border-gray-600 leading-relaxed hover:text-black hover:border-black cursor-pointer"
                                           href="#">view product {{$key}}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <label for="carousel-{{count($banners)}}"
                               class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-{{$key+2}}"
                               class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                @endforeach

                <!-- Add additional indicators for each slide-->
                    <ol class="carousel-indicators">
                        @foreach($banners as $key =>$banner)
                            <li class="inline-block mr-3">
                                <label for="carousel-{{$key}}"
                                       class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                            </li>
                        @endforeach
                    </ol>

                </div>
            </div>

    </div>

    @endif
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                       href="#">
                        {{__("categories")}}
                    </a>

                    <div class="flex items-center" id="store-nav-content">

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24">
                                <path d="M7 11H17V13H7zM4 7H20V9H4zM10 15H14V17H10z"/>
                            </svg>
                        </a>

                        <a class="pl-3 inline-block no-underline hover:text-black" href="#">
                            <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24">
                                <path
                                    d="M10,18c1.846,0,3.543-0.635,4.897-1.688l4.396,4.396l1.414-1.414l-4.396-4.396C17.365,13.543,18,11.846,18,10 c0-4.411-3.589-8-8-8s-8,3.589-8,8S5.589,18,10,18z M10,4c3.309,0,6,2.691,6,6s-2.691,6-6,6s-6-2.691-6-6S6.691,4,10,4z"/>
                            </svg>
                        </a>

                    </div>
                </div>
            </nav>
            @forelse($categories as $category)
                @if($category->is_parent)
                    <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                        <a href="{{route('product-cat',[app()->getLocale() , $category->slug])}}">
                            <img class="hover:grow hover:shadow-lg h-72 object-cover"
                                 src="{{$category->photo}}">
                            <div class="pt-3 flex items-center justify-between">
                                <p class="">{{$category->title}}</p>
                            </div>
                        </a>
                    </div>
                @endif
            @empty
                {{__("no categories yet")}}
            @endforelse
        </div>

    </section>
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                       href="#">
                        {{__("trending items")}}

                    </a>
                </div>
            </nav>
        </div>
        <div class="container mx-auto p-5 md:p-0">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                @forelse($products as $product)
                    <div
                        class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-xl sm:mx-auto">
                        <a href="{{route('product-detail',[app()->getLocale(),$product->slug])}}">
                            @php
                                $photo=explode(',',$product->photo);
                            @endphp
                            <img class="rounded-t-lg object-cover  w-full h-52" src="{{$photo[0]}}" alt=""/>
                        </a>
                        <div class="p-5">
                            <a href="{{route('product-detail',[app()->getLocale(),$product->slug])}}">
                                <h5 class="mb-2 text-2xl tracking-tight text-gray-600 dark:text-white">
                                    {{$product->title}}</h5>
                            </a>
                            <p class="mb-3 text-2xl font-bold text-gray-700 dark:text-gray-400">{{$product->price}}
                                MAD</p>
                            <a href="{{route('product-detail',[app()->getLocale(),$product->slug])}}"
                               class="inline-flex items-center py-2 px-2 text-sm font-medium text-center text-white border border-blue-700 rounded-full hover:bg-gray-200  focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 right-0">
                                <span class="md:hidden text-gray-800">{{__("add to cart")}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-700" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                @empty
                    {{__("no products yet")}}
                @endforelse
            </div>
        </div>


    </section>
    <section class="bg-white py-8">

        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

            <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">

                    <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                       href="#">
                        {{__("featured items")}}

                    </a>
                </div>
            </nav>
        </div>
        <div class="container mx-auto p-5 md:p-0">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @forelse($featured as $product)
                    @php
                        $photo=explode(',',$product->photo);
                    @endphp
                    <div class="bg-gray-200  h-72 rounded-lg shadow-xl  relative">
                        <img class="max-w-full w-full h-full object-cover" src="{{$photo[0]}}" alt="">
                        <div class="w-full absolute top-1/3 left-10">
                            <h1 class="font-bold text-lg py-2">{{$product->title}}</h1>
                            <h1 class="font-bold text-lg py-2 text-yellow-600">UP TO <span class="text-black">{{$product->discount}}%</span>
                            </h1>
                            <a class="px-4 py-2 text-white bg-yellow-600 hover:bg-yellow-500 rounded-xl"
                               href="{{route('product-detail',[app()->getLocale(),$product->slug])}}">Shop Now</a>
                        </div>
                    </div>
                @empty
                    {{__("no featured products yet")}}
                @endforelse
            </div>
        </div>
    </section>
    @if( $products->where('condition','hot')->count() > 0)

        <section class="bg-white py-8">

            <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

                <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                    <div class="w-full container mx-auto flex flex-wrap items-center justify-center mt-0 px-2 py-3">

                        <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
                           href="#">
                            {{__("hot items")}}

                        </a>
                    </div>
                </nav>
            </div>
            <div class="container mx-auto p-5 md:p-0">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @forelse($featured as $product)
                        @if($product->condition =='hot')
                            @php
                                $photo=explode(',',$product->photo);
                            @endphp
                            <div class="bg-gray-200  h-72 rounded-lg shadow-xl  relative">
                                <img class="max-w-full w-full h-full object-cover" src="{{$photo[0]}}" alt="">
                                <div class="w-full absolute top-1/3 left-10 rtl:hidden ">
                                    <h1 class="font-bold text-lg py-2">{{$product->title}}</h1>
                                    <h1 class="font-bold text-lg py-2 text-yellow-600">UP TO <span class="text-black">{{$product->discount}}%</span>
                                    </h1>
                                    <a class="px-4 py-2 text-white bg-yellow-600 hover:bg-yellow-500 rounded-xl"
                                       href="{{route('product-detail',[app()->getLocale(),$product->slug])}}">Shop
                                        Now</a>
                                </div>
                            </div>
                        @endif
                    @empty
                        {{__("no hot products yet")}}
                    @endforelse
                </div>
            </div>
        </section>

    @endif
    <div class="w-full bg-indigo-900 py-10 flex flex-wrap my-8 justify-center">
        <div class="grid sm:grid-cols-1 md:grid-cols-4 gap-4">
            <div
                class="max-w-sm rounded overflow-hidden shadow-xl cursor-pointer rounded card bg-white shadow-xl rounded">
                <div class="px-6 py-4 justify-center text-center">
                    <i class="ti-rocket text-5xl"></i>
                    <h1 class="font-bold mb-2">{{__("free shipping")}}</h1>
                    <p class=" text-base">
                        {{__("orders over 1000 MAD")}}
                    </p>
                </div>
            </div>
            <div
                class="max-w-sm rounded overflow-hidden shadow-xl cursor-pointer rounded card bg-white shadow-xl rounded">
                <div class="px-6 py-4 justify-center text-center">
                    <i class="ti-reload text-5xl"></i>
                    <h1 class="font-bold mb-2">{{__("free return")}}</h1>
                    <p class=" text-base">
                        {{__("within 7 days returns")}}
                    </p>
                </div>
            </div>
            <div
                class="max-w-sm rounded overflow-hidden shadow-xl cursor-pointer rounded card bg-white shadow-xl rounded">
                <div class="px-6 py-4 justify-center text-center">
                    <i class="ti-lock text-5xl"></i>
                    <h1 class="font-bold mb-2">{{__("cash on delivery")}}</h1>
                    <p class=" text-base">
                        {{__("100% secure payment")}}
                    </p>
                </div>
            </div>
            <div
                class="max-w-sm rounded overflow-hidden shadow-xl cursor-pointer rounded card bg-white shadow-xl rounded">
                <div class="px-6 py-4 justify-center text-center">
                    <i class="ti-tag text-5xl"></i>
                    <h1 class="font-bold mb-2">{{__("best prices")}}</h1>
                    <p class=" text-base">
                        {{__("guaranteed price")}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.layouts.newsletter')
@endsection

@push('styles')
    {{--    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>--}}
    {{--    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>--}}
    <style>
        .c-card:hover img
        transform:
        scale

        (
        1.05
        )
        ;
        }

        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked + #menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
@endpush
