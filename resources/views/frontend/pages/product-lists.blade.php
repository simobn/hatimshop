@extends('frontend.layouts.master')

@section('title','E-SHOP || PRODUCT PAGE')

@section('main-content')
    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="bg-white">
        <div>
            <!--
              Mobile filter dialog

              Off-canvas filters for mobile, show/hide based on off-canvas filters state.
            -->
            <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true" id="left-sidebar">
                <!--
                  Off-canvas menu overlay, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "translate-x-full"
                -->
                <div
                    class="ml-auto relative max-w-xs w-full h-full bg-white shadow-xl py-4 pb-12 flex flex-col overflow-y-auto ">
                    <div class="px-4 flex items-center justify-between">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" id="close_menu"
                                class="-mr-2 w-10 h-10 bg-white p-2 rounded-md flex items-center justify-center text-gray-400">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4 border-t border-gray-200">
                        <h3 class="sr-only">Categories</h3>
                        <ul role="list" class="font-medium text-gray-900 px-2 py-3">
                            <li>
                                <a href="#" class="block px-2 py-3">
                                    Totes
                                </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3">
                                    Backpacks
                                </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3">
                                    Travel Bags
                                </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3">
                                    Hip Bags
                                </a>
                            </li>

                            <li>
                                <a href="#" class="block px-2 py-3">
                                    Laptop Sleeves
                                </a>
                            </li>
                        </ul>

                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-mobile-0" aria-expanded="false">
                <span class="font-medium text-gray-900">
                  Color
                </span>
                                    <span class="ml-6 flex items-center">
                  <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                          clip-rule="evenodd"/>
                  </svg>
                                        <!--
                                          Collapse icon, show/hide based on section open state.

                                          Heroicon name: solid/minus-sm
                                        -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"/>
                  </svg>
                </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-0">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            White
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Beige
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox"
                                               checked
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Blue
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Brown
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Green
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Purple
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-mobile-1" aria-expanded="false">
                <span class="font-medium text-gray-900">
                  Category
                </span>
                                    <span class="ml-6 flex items-center">
                  <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                          clip-rule="evenodd"/>
                  </svg>
                                        <!--
                                          Collapse icon, show/hide based on section open state.

                                          Heroicon name: solid/minus-sm
                                        -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"/>
                  </svg>
                </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-1">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-0" name="category[]" value="new-arrivals"
                                               type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            {{__("Products list")}}
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-1" name="category[]" value="sale"
                                               type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Sale
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-2" name="category[]" value="travel"
                                               type="checkbox" checked
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Travel
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-3" name="category[]" value="organization"
                                               type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Organization
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-category-4" name="category[]" value="accessories"
                                               type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            Accessories
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 px-4 py-6">
                            <h3 class="-mx-2 -my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="px-2 py-3 bg-white w-full flex items-center justify-between text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-mobile-2" aria-expanded="false">
                <span class="font-medium text-gray-900">
                  Size
                </span>
                                    <span class="ml-6 flex items-center">
                  <!--
                    Expand icon, show/hide based on section open state.

                    Heroicon name: solid/plus-sm
                  -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                          clip-rule="evenodd"/>
                  </svg>
                                        <!--
                                          Collapse icon, show/hide based on section open state.

                                          Heroicon name: solid/minus-sm
                                        -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                       aria-hidden="true">
                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd"/>
                  </svg>
                </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-mobile-2">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            2L
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            6L
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            12L
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-3" name="size[]" value="18l" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            18L
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-4" name="size[]" value="20l" type="checkbox"
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-4" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            20L
                                        </label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="filter-mobile-size-5" name="size[]" value="40l" type="checkbox"
                                               checked
                                               class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                        <label for="filter-mobile-size-5" class="ml-3 min-w-0 flex-1 text-gray-500">
                                            40L
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative z-10 flex items-baseline justify-between pt-24 pb-6 border-b border-gray-200">
                    <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">{{__("products")}}</h1>
                </div>

                <section aria-labelledby="products-heading" class="pt-6 pb-24">
                    <h2 id="products-heading" class="sr-only">{{__("products")}}</h2>

                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-8 gap-y-10">
                        <!-- Filters -->
                        <form class="hidden lg:block" action="{{route('shop.filter',app()->getLocale())}}"
                              method="POST">
                            @csrf
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list"
                                class="text-sm font-medium text-gray-900 space-y-4 pb-6 border-b border-gray-200">
                                @php
                                    $menu=App\Models\Category::getAllParentWithChild();
                                @endphp
                                @if($menu)
                                    @foreach($menu as $cat_info)
                                        @if($cat_info->child_cat->count()>0)
                                            <li>
                                                <a href="{{route('product-cat',[app()->getLocale(),$cat_info->slug])}}">{{$cat_info->title}}</a>
                                                <ul>
                                                    @foreach($cat_info->child_cat as $sub_menu)
                                                        <li>
                                                            <a href="{{route('product-sub-cat',[app()->getLocale(),$cat_info->slug,$sub_menu->slug])}}">{{$sub_menu->title}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('product-cat',[app()->getLocale(),$cat_info->slug])}}">{{$cat_info->title}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>

                            <div class="border-b border-gray-200 py-6">
                                <h3 class="-my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                            class="py-3 bg-white w-full flex items-center text-sm text-gray-400 hover:text-gray-500"
                                            aria-controls="filter-section-0" aria-expanded="false">
                                          <span class="font-medium text-gray-900">
                                            Price: 0 -
                                          </span>
                                        <span class="font-medium text-gray-900 ml-2 text-gray-500"
                                              id="max_price">0</span>{{__("MAD")}}
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-0">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            @php
                                                $max=DB::table('products')->max('price');
                                                // dd($max);
                                            @endphp
                                            <input
                                                type="range"
                                                name="price"
                                                class="form-range
                                                  appearance-none
                                                  w-full
                                                  h-1
                                                  p-0
                                                  bg-gray-500
                                                  focus:outline-none focus:ring-0 focus:shadow-none"
                                                id="price_range"
                                                min="0"
                                                max="{{$max}}"
                                                value="{{$max}}"
                                            />
                                            <input type="hidden" name="category" id="cat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit">{{__("Filter")}}</button>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3 h-screen">
                            <!-- Replace with your content -->
                            <div class="border-4 border-dashed border-gray-200 rounded-lg h-full">
                                <div class="w-full px-5 py-5 grid grid-cols-1 md:grid-cols-3 sm:gap-8 md:gap-4 ">
                                    @forelse($products as $product)
                                        <div
                                            class="w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 hover:shadow-xl sm:mx-auto">
                                            <a href="{{route('product-detail',[app()->getLocale(),$product->slug])}}">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                @endphp
                                                <img class="rounded-t-lg object-cover  w-full h-52" src="{{$photo[0]}}"
                                                     alt=""/>
                                            </a>
                                            <div class="p-5">
                                                <a href="{{route('product-detail',[app()->getLocale(),$product->slug])}}">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                        {{$product->title}}</h5>
                                                </a>
                                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$product->price}}
                                                    {{__("MAD")}}</p>
                                                <a href="{{route('product-detail',[app()->getLocale(),$product->slug])}}"
                                                   class="inline-flex items-center py-2 px-2 text-sm font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 right-0">
                                                    <span class="md:hidden">add to cart</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                         viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        {{--                                        <div class=" p-6">--}}
                                        {{--                                            <a href="#" class="">--}}
                                        {{--                                                @php--}}
                                        {{--                                                    $photo=explode(',',$product->photo);--}}
                                        {{--                                                @endphp--}}
                                        {{--                                                <img class="hover:grow hover:shadow-lg w-full h-80 rounded-t-lg"--}}
                                        {{--                                                     src="{{$photo[0]}}">--}}
                                        {{--                                                <div class="pt-3 items-start">--}}
                                        {{--                                                    <p class="font-light text-2xl">{{$product->title}}</p>--}}
                                        {{--                                                    <p class="font-light">{{$product->price}} MAD</p>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </a>--}}
                                        {{--                                        </div>--}}
                                    @empty
                                        {{__("no products yet")}}
                                    @endforelse
                                </div>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    {{--		<!-- Breadcrumbs -->--}}
    {{--		<div class="breadcrumbs">--}}
    {{--			<div class="container">--}}
    {{--				<div class="row">--}}
    {{--					<div class="col-12">--}}
    {{--						<div class="bread-inner">--}}
    {{--							<ul class="bread-list">--}}
    {{--								<li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>--}}
    {{--								<li class="active"><a href="javascript:void(0);">Shop List</a></li>--}}
    {{--							</ul>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--				</div>--}}
    {{--			</div>--}}
    {{--		</div>--}}
    {{--		<!-- End Breadcrumbs -->--}}
    {{--		<form action="{{route('shop.filter')}}" method="POST">--}}
    {{--		@csrf--}}
    {{--			<!-- Product Style 1 -->--}}
    {{--			<section class="product-area shop-sidebar shop-list shop section">--}}
    {{--				<div class="container">--}}
    {{--					<div class="row">--}}
    {{--						<div class="col-lg-3 col-md-4 col-12">--}}
    {{--							<div class="shop-sidebar">--}}
    {{--                                <!-- Single Widget -->--}}
    {{--                                <div class="single-widget category">--}}
    {{--                                    <h3 class="title">Categories</h3>--}}
    {{--                                    <ul class="categor-list">--}}
    {{--										@php--}}
    {{--											// $category = new Category();--}}
    {{--											$menu=App\Models\Category::getAllParentWithChild();--}}
    {{--										@endphp--}}
    {{--										@if($menu)--}}
    {{--										<li>--}}
    {{--											@foreach($menu as $cat_info)--}}
    {{--													@if($cat_info->child_cat->count()>0)--}}
    {{--														<li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a>--}}
    {{--															<ul>--}}
    {{--																@foreach($cat_info->child_cat as $sub_menu)--}}
    {{--																	<li><a href="{{route('product-sub-cat',[$cat_info->slug,$sub_menu->slug])}}">{{$sub_menu->title}}</a></li>--}}
    {{--																@endforeach--}}
    {{--															</ul>--}}
    {{--														</li>--}}
    {{--													@else--}}
    {{--														<li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a></li>--}}
    {{--													@endif--}}
    {{--											@endforeach--}}
    {{--										</li>--}}
    {{--										@endif--}}
    {{--                                        --}}{{-- @foreach(Helper::productCategoryList('products') as $cat)--}}
    {{--                                            @if($cat->is_parent==1)--}}
    {{--												<li><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></li>--}}
    {{--											@endif--}}
    {{--                                        @endforeach --}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                                <!--/ End Single Widget -->--}}
    {{--                                <!-- Shop By Price -->--}}
    {{--								<div class="single-widget range">--}}
    {{--									<h3 class="title">Shop by Price</h3>--}}
    {{--									<div class="price-filter">--}}
    {{--										<div class="price-filter-inner">--}}
    {{--											--}}{{-- <div id="slider-range" data-min="10" data-max="2000" data-currency="%"></div>--}}
    {{--												<div class="price_slider_amount">--}}
    {{--												<div class="label-input">--}}
    {{--													<span>Range:</span>--}}
    {{--													<input type="text" id="amount" name="price_range" value='@if(!empty($_GET['price'])) {{$_GET['price']}} @endif' placeholder="Add Your Price"/>--}}
    {{--												</div>--}}
    {{--											</div> --}}
    {{--											@php--}}
    {{--												$max=DB::table('products')->max('price');--}}
    {{--												// dd($max);--}}
    {{--											@endphp--}}
    {{--											<div id="slider-range" data-min="0" data-max="{{$max}}"></div>--}}
    {{--											<div class="product_filter">--}}
    {{--											<button type="submit" class="filter_button">Filter</button>--}}
    {{--											<div class="label-input">--}}
    {{--												<span>Range:</span>--}}
    {{--												<input style="" type="text" id="amount" readonly/>--}}
    {{--												<input type="hidden" name="price_range" id="price_range" value="@if(!empty($_GET['price'])){{$_GET['price']}}@endif"/>--}}
    {{--											</div>--}}
    {{--											</div>--}}
    {{--										</div>--}}
    {{--									</div>--}}
    {{--									--}}{{-- <ul class="check-box-list">--}}
    {{--										<li>--}}
    {{--											<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>--}}
    {{--										</li>--}}
    {{--										<li>--}}
    {{--											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>--}}
    {{--										</li>--}}
    {{--										<li>--}}
    {{--											<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>--}}
    {{--										</li>--}}
    {{--									</ul> --}}
    {{--								</div>--}}
    {{--								<!--/ End Shop By Price -->--}}
    {{--                                <!-- Single Widget -->--}}
    {{--                                <div class="single-widget recent-post">--}}
    {{--                                    <h3 class="title">Recent post</h3>--}}
    {{--                                    --}}{{-- {{dd($recent_products)}} --}}
    {{--                                    @foreach($recent_products as $product)--}}
    {{--                                        <!-- Single Post -->--}}
    {{--                                        @php --}}
    {{--                                            $photo=explode(',',$product->photo);--}}
    {{--                                        @endphp--}}
    {{--                                        <div class="single-post first">--}}
    {{--                                            <div class="image">--}}
    {{--                                                <img src="{{$photo[0]}}" alt="{{$photo[0]}}">--}}
    {{--                                            </div>--}}
    {{--                                            <div class="content">--}}
    {{--                                                <h5><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h5>--}}
    {{--                                                @php--}}
    {{--                                                    $org=($product->price-($product->price*$product->discount)/100);--}}
    {{--                                                @endphp--}}
    {{--                                                <p class="price"><del class="text-muted">${{number_format($product->price,2)}}</del>   ${{number_format($org,2)}}  </p>                                                --}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- End Single Post -->--}}
    {{--                                    @endforeach--}}
    {{--                                </div>--}}
    {{--                                <!--/ End Single Widget -->--}}
    {{--                                <!-- Single Widget -->--}}
    {{--                                <div class="single-widget category">--}}
    {{--                                    <h3 class="title">Brands</h3>--}}
    {{--                                    <ul class="categor-list">--}}
    {{--                                        @php--}}
    {{--                                            $brands=DB::table('brands')->orderBy('title','ASC')->where('status','active')->get();--}}
    {{--                                        @endphp--}}
    {{--                                        @foreach($brands as $brand)--}}
    {{--                                            <li><a href="{{route('product-brand',$brand->slug)}}">{{$brand->title}}</a></li>--}}
    {{--                                        @endforeach--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                                <!--/ End Single Widget -->--}}
    {{--                        	</div>--}}
    {{--						</div>--}}
    {{--						<div class="col-lg-9 col-md-8 col-12">--}}
    {{--							<div class="row">--}}
    {{--								<div class="col-12">--}}
    {{--									<!-- Shop Top -->--}}
    {{--									<div class="shop-top">--}}
    {{--										<div class="shop-shorter">--}}
    {{--											<div class="single-shorter">--}}
    {{--												<label>Show :</label>--}}
    {{--												<select class="show" name="show" onchange="this.form.submit();">--}}
    {{--													<option value="">Default</option>--}}
    {{--													<option value="9" @if(!empty($_GET['show']) && $_GET['show']=='9') selected @endif>09</option>--}}
    {{--													<option value="15" @if(!empty($_GET['show']) && $_GET['show']=='15') selected @endif>15</option>--}}
    {{--													<option value="21" @if(!empty($_GET['show']) && $_GET['show']=='21') selected @endif>21</option>--}}
    {{--													<option value="30" @if(!empty($_GET['show']) && $_GET['show']=='30') selected @endif>30</option>--}}
    {{--												</select>--}}
    {{--											</div>--}}
    {{--											<div class="single-shorter">--}}
    {{--												<label>Sort By :</label>--}}
    {{--												<select class='sortBy' name='sortBy' onchange="this.form.submit();">--}}
    {{--													<option value="">Default</option>--}}
    {{--													<option value="title" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='title') selected @endif>Name</option>--}}
    {{--													<option value="price" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='price') selected @endif>Price</option>--}}
    {{--													<option value="category" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='category') selected @endif>Category</option>--}}
    {{--													<option value="brand" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='brand') selected @endif>Brand</option>--}}
    {{--												</select>--}}
    {{--											</div>--}}
    {{--										</div>--}}
    {{--										<ul class="view-mode">--}}
    {{--											<li><a href="{{route('product-grids')}}"><i class="fa fa-th-large"></i></a></li>--}}
    {{--											<li class="active"><a href="javascript:void(0)"><i class="fa fa-th-list"></i></a></li>--}}
    {{--										</ul>--}}
    {{--									</div>--}}
    {{--									<!--/ End Shop Top -->--}}
    {{--								</div>--}}
    {{--							</div>--}}
    {{--							<div class="row">--}}
    {{--								@if(count($products))--}}
    {{--									@foreach($products as $product)--}}
    {{--									 	--}}{{-- {{$product}} --}}
    {{--										<!-- Start Single List -->--}}
    {{--										<div class="col-12">--}}
    {{--											<div class="row">--}}
    {{--												<div class="col-lg-4 col-md-6 col-sm-6">--}}
    {{--													<div class="single-product">--}}
    {{--														<div class="product-img">--}}
    {{--															<a href="{{route('product-detail',$product->slug)}}">--}}
    {{--															@php --}}
    {{--																$photo=explode(',',$product->photo);--}}
    {{--															@endphp--}}
    {{--															<img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">--}}
    {{--															<img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">--}}
    {{--															</a>--}}
    {{--															<div class="button-head">--}}
    {{--																<div class="product-action">--}}
    {{--																	<a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
    {{--																	<a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" class="wishlist" data-id="{{$product->id}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
    {{--																</div>--}}
    {{--																<div class="product-action-2">--}}
    {{--																	<a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>--}}
    {{--																</div>--}}
    {{--															</div>--}}
    {{--														</div>--}}
    {{--													</div>--}}
    {{--												</div>--}}
    {{--												<div class="col-lg-8 col-md-6 col-12">--}}
    {{--													<div class="list-content">--}}
    {{--														<div class="product-content">--}}
    {{--															<div class="product-price">--}}
    {{--																@php--}}
    {{--																	$after_discount=($product->price-($product->price*$product->discount)/100);--}}
    {{--																@endphp--}}
    {{--																<span>${{number_format($after_discount,2)}}</span>--}}
    {{--																<del>${{number_format($product->price,2)}}</del>--}}
    {{--															</div>--}}
    {{--															<h3 class="title"><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>--}}
    {{--														--}}{{-- <p>{!! html_entity_decode($product->summary) !!}</p> --}}
    {{--														</div>--}}
    {{--														<p class="des pt-2">{!! html_entity_decode($product->summary) !!}</p>--}}
    {{--														<a href="javascript:void(0)" class="btn cart" data-id="{{$product->id}}">Buy Now!</a>--}}
    {{--													</div>--}}
    {{--												</div>--}}
    {{--											</div>--}}
    {{--										</div>--}}
    {{--										<!-- End Single List -->--}}
    {{--									@endforeach--}}
    {{--								@else--}}
    {{--									<h4 class="text-warning" style="margin:100px auto;">There are no products.</h4>--}}
    {{--								@endif--}}
    {{--							</div>--}}
    {{--							 <div class="row">--}}
    {{--                            <div class="col-md-12 justify-content-center d-flex">--}}
    {{--                                --}}{{-- {{$products->appends($_GET)->links()}}  --}}
    {{--                            </div>--}}
    {{--                          </div>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--				</div>--}}
    {{--			</section>--}}
    {{--			<!--/ End Product Style 1  -->	--}}
    {{--		</form>--}}
    {{--		<!-- Modal -->--}}
    {{--		@if($products)--}}
    {{--			@foreach($products as $key=>$product)--}}
    {{--				<div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">--}}
    {{--						<div class="modal-dialog" role="document">--}}
    {{--							<div class="modal-content">--}}
    {{--								<div class="modal-header">--}}
    {{--									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>--}}
    {{--								</div>--}}
    {{--								<div class="modal-body">--}}
    {{--									<div class="row no-gutters">--}}
    {{--										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">--}}
    {{--											<!-- Product Slider -->--}}
    {{--												<div class="product-gallery">--}}
    {{--													<div class="quickview-slider-active">--}}
    {{--														@php --}}
    {{--															$photo=explode(',',$product->photo);--}}
    {{--														// dd($photo);--}}
    {{--														@endphp--}}
    {{--														@foreach($photo as $data)--}}
    {{--															<div class="single-slider">--}}
    {{--																<img src="{{$data}}" alt="{{$data}}">--}}
    {{--															</div>--}}
    {{--														@endforeach--}}
    {{--													</div>--}}
    {{--												</div>--}}
    {{--											<!-- End Product slider -->--}}
    {{--										</div>--}}
    {{--										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">--}}
    {{--											<div class="quickview-content">--}}
    {{--												<h2>{{$product->title}}</h2>--}}
    {{--												<div class="quickview-ratting-review">--}}
    {{--													<div class="quickview-ratting-wrap">--}}
    {{--														<div class="quickview-ratting">--}}
    {{--															--}}{{-- <i class="yellow fa fa-star"></i>--}}
    {{--															<i class="yellow fa fa-star"></i>--}}
    {{--															<i class="yellow fa fa-star"></i>--}}
    {{--															<i class="yellow fa fa-star"></i>--}}
    {{--															<i class="fa fa-star"></i> --}}
    {{--															@php--}}
    {{--																$rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');--}}
    {{--																$rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();--}}
    {{--															@endphp--}}
    {{--															@for($i=1; $i<=5; $i++)--}}
    {{--																@if($rate>=$i)--}}
    {{--																	<i class="yellow fa fa-star"></i>--}}
    {{--																@else --}}
    {{--																<i class="fa fa-star"></i>--}}
    {{--																@endif--}}
    {{--															@endfor--}}
    {{--														</div>--}}
    {{--														<a href="#"> ({{$rate_count}} customer review)</a>--}}
    {{--													</div>--}}
    {{--													<div class="quickview-stock">--}}
    {{--														@if($product->stock >0)--}}
    {{--														<span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>--}}
    {{--														@else --}}
    {{--														<span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>--}}
    {{--														@endif--}}
    {{--													</div>--}}
    {{--												</div>--}}
    {{--												@php--}}
    {{--													$after_discount=($product->price-($product->price*$product->discount)/100);--}}
    {{--												@endphp--}}
    {{--												<h3><small><del class="text-muted">${{number_format($product->price,2)}}</del></small>    ${{number_format($after_discount,2)}}  </h3>--}}
    {{--												<div class="quickview-peragraph">--}}
    {{--													<p>{!! html_entity_decode($product->summary) !!}</p>--}}
    {{--												</div>--}}
    {{--												@if($product->size)--}}
    {{--													<div class="size">--}}
    {{--														<h4>Size</h4>--}}
    {{--														<ul>--}}
    {{--															@php --}}
    {{--																$sizes=explode(',',$product->size);--}}
    {{--																// dd($sizes);--}}
    {{--															@endphp--}}
    {{--															@foreach($sizes as $size)--}}
    {{--															<li><a href="#" class="one">{{$size}}</a></li>--}}
    {{--															@endforeach--}}
    {{--														</ul>--}}
    {{--													</div>--}}
    {{--												@endif--}}
    {{--												<form action="{{route('single-add-to-cart')}}" method="POST">--}}
    {{--													@csrf --}}
    {{--													<div class="quantity">--}}
    {{--														<!-- Input Order -->--}}
    {{--														<div class="input-group">--}}
    {{--															<div class="button minus">--}}
    {{--																<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">--}}
    {{--																	<i class="ti-minus"></i>--}}
    {{--																</button>--}}
    {{--															</div>--}}
    {{--															<input type="hidden" name="slug" value="{{$product->slug}}">--}}
    {{--															<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">--}}
    {{--															<div class="button plus">--}}
    {{--																<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">--}}
    {{--																	<i class="ti-plus"></i>--}}
    {{--																</button>--}}
    {{--															</div>--}}
    {{--														</div>--}}
    {{--														<!--/ End Input Order -->--}}
    {{--													</div>--}}
    {{--													<div class="add-to-cart">--}}
    {{--														<button type="submit" class="btn">Add to cart</button>--}}
    {{--														<a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>--}}
    {{--													</div>--}}
    {{--												</form>--}}
    {{--												<div class="default-social">--}}
    {{--												<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->--}}
    {{--												</div>--}}
    {{--											</div>--}}
    {{--										</div>--}}
    {{--									</div>--}}
    {{--								</div>--}}
    {{--							</div>--}}
    {{--						</div>--}}
    {{--				</div>--}}
    {{--			@endforeach--}}
    {{--		@endif--}}
    <!-- Modal end -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            let cat = $(location).attr('pathname')
            $('#max_price').text($('#price_range').val())
            if (cat.includes('/product-cat')) {
                $('#cat').val(cat.replace('/product-cat/', ''))
            }

        });
        $('#price_range').on('input', function (e) {
            $('#max_price').text(this.value)
            // console.log(this.value)
        })
        $('#close_menu').click('click', function () {
            $('#left-sidebar').addClass('hidden')
        })
        $('#price_range').change(function (e) {
            $('#max_price').text(this.value)
            // console.log(this.value)
        })
    </script>
@endpush
