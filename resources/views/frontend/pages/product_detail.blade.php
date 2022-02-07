@extends('frontend.layouts.master')

@section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="online shop, purchase, cart, ecommerce site, best online shopping">
    <meta name="description" content="{{$product_detail->summary}}">
    <meta property="og:url" content="{{route('product-detail',[app()->getLocale(),$product_detail->slug])}}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{$product_detail->title}}">
    <meta property="og:image" content="{{$product_detail->photo}}">
    <meta property="og:description" content="{{$product_detail->description}}">
@endsection
@section('title','E-SHOP || PRODUCT DETAIL')
@section('main-content')

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex justify-center items-center lg:flex-row flex-col gap-8">
            <!-- Description Div -->
            {{--            {{dd(request()->route()->parameters)}}--}}
            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 items-center">
                <p class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 font-normal text-base leading-4 text-gray-600  dark:text-white">
                    Home / Product Detail / {{$product_detail->title}}</p>
                <h2 class="font-semibold lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 dark:text-white mt-4">{{$product_detail->title}}</h2>

                <div class="flex flex-row justify-between mt-5">
                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail4-svg1.svg"
                         alt="stars">
                    <img class="hidden dark:block"
                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/productDetail4-svg1dark.svg" alt="stars">
                    <p class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 font-normal text-base leading-4 text-gray-700 hover:underline hover:text-gray-800 dark:text-white duration-100 cursor-pointer">
                        22 {{__("reviews")}}</p>
                </div>

                <p class="font-normal text-base leading-6 text-gray-600  mt-7">{!! $product_detail->description !!}</p>
                <p class="font-semibold lg:text-2xl text-xl lg:leading-6 leading-5 mt-6 dark:text-white">{{$product_detail->price}}
                    {{__("MAD")}}</p>
                <form action="{{route('single-add-to-cart',app()->getLocale())}}" method="POST">
                    @csrf
                    <div class="quantity">
                        <h6>{{__("Quantity")}} :</h6>
                        <!-- Input Order -->
                        <div class="input-group flex">
                            <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number" disabled="disabled"
                                        data-type="minus" data-field="quant[1]">
                                    <i class="ti-minus"></i>
                                </button>
                            </div>
                            <input type="hidden" name="slug" value="{{$product_detail->slug}}">
                            <input type="text" name="quant[1]" class="input-number w-10 border border-2" data-min="1"
                                   data-max="1000"
                                   value="1" id="quantity">
                            <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number" data-type="plus"
                                        data-field="quant[1]">
                                    <i class="ti-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!--/ End Input Order -->
                    </div>
                    <div class="add-to-cart mt-4">
                        <button
                            class="focus:outline-none focus:ring-2 hover:bg-black focus:ring-offset-2 focus:ring-gray-800 font-medium text-base leading-4 text-white bg-gray-800 w-full py-5 lg:mt-12 mt-6 dark:bg-white dark:text-gray-900 dark:hover:bg-gray-100">
                            {{__("Add to shopping bag")}}
                        </button>
                        {{--                        <button type="submit" class="btn">Add to cart</button>--}}
                        {{--                        <a href="{{route('add-to-wishlist',$product_detail->slug)}}" class="btn min"><i--}}
                        {{--                                class="ti-heart"></i></a>--}}
                    </div>
                </form>
            </div>

            <!-- Preview Images Div For larger Screen-->

            <div class="w-full sm:w-96 md:w-8/12 lg:w-6/12 flex lg:flex-row flex-col lg:gap-8 sm:gap-6 gap-4">
                @php
                    $photo=explode(',',$product_detail->photo);
                @endphp
                <div class="w-full lg:w-8/12 max-h-screen bg-gray-100 flex justify-center items-center">
                    <img class="w-full h-full object-cover" src="{{$photo[0]}}"
                         alt="{{$product_detail->title}} Previw"/>
                </div>
                <div class="w-full lg:w-4/12 grid lg:grid-cols-1 sm:grid-cols-4 grid-cols-2 gap-6">
                    @foreach($photo as $data)
                        <div class="bg-gray-100 flex justify-center items-center py-4">
                            <img class="w-full" src="{{$data}}" alt="{{$product_detail->title}} preview 3"/>
                        </div>
                    @endforeach
                </div>
            </div>
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
    {{--								<li class="active"><a href="">Shop Details</a></li>--}}
    {{--							</ul>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--				</div>--}}
    {{--			</div>--}}
    {{--		</div>--}}
    {{--		<!-- End Breadcrumbs -->--}}
    {{--				--}}
    {{--		<!-- Shop Single -->--}}
    {{--		<section class="shop single section">--}}
    {{--					<div class="container">--}}
    {{--						<div class="row"> --}}
    {{--							<div class="col-12">--}}
    {{--								<div class="row">--}}
    {{--									<div class="col-lg-6 col-12">--}}
    {{--										<!-- Product Slider -->--}}
    {{--										<div class="product-gallery">--}}
    {{--											<!-- Images slider -->--}}
    {{--											<div class="flexslider-thumbnails">--}}
    {{--												<ul class="slides">--}}
    {{--													@php --}}
    {{--														$photo=explode(',',$product_detail->photo);--}}
    {{--													// dd($photo);--}}
    {{--													@endphp--}}
    {{--													@foreach($photo as $data)--}}
    {{--														<li data-thumb="{{$data}}" rel="adjustX:10, adjustY:">--}}
    {{--															<img src="{{$data}}" alt="{{$data}}">--}}
    {{--														</li>--}}
    {{--													@endforeach--}}
    {{--												</ul>--}}
    {{--											</div>--}}
    {{--											<!-- End Images slider -->--}}
    {{--										</div>--}}
    {{--										<!-- End Product slider -->--}}
    {{--									</div>--}}
    {{--									<div class="col-lg-6 col-12">--}}
    {{--										<div class="product-des">--}}
    {{--											<!-- Description -->--}}
    {{--											<div class="short">--}}
    {{--												<h4>{{$product_detail->title}}</h4>--}}
    {{--												<div class="rating-main">--}}
    {{--													<ul class="rating">--}}
    {{--														@php--}}
    {{--															$rate=ceil($product_detail->getReview->avg('rate'))--}}
    {{--														@endphp--}}
    {{--															@for($i=1; $i<=5; $i++)--}}
    {{--																@if($rate>=$i)--}}
    {{--																	<li><i class="fa fa-star"></i></li>--}}
    {{--																@else --}}
    {{--																	<li><i class="fa fa-star-o"></i></li>--}}
    {{--																@endif--}}
    {{--															@endfor--}}
    {{--													</ul>--}}
    {{--													<a href="#" class="total-review">({{$product_detail['getReview']->count()}}) Review</a>--}}
    {{--                                                </div>--}}
    {{--                                                @php --}}
    {{--                                                    $after_discount=($product_detail->price-(($product_detail->price*$product_detail->discount)/100));--}}
    {{--                                                @endphp--}}
    {{--												<p class="price"><span class="discount">${{number_format($after_discount,2)}}</span><s>${{number_format($product_detail->price,2)}}</s> </p>--}}
    {{--												<p class="description">{!!($product_detail->summary)!!}</p>--}}
    {{--											</div>--}}
    {{--											<!--/ End Description -->--}}
    {{--											<!-- Color -->--}}
    {{--											--}}{{-- <div class="color">--}}
    {{--												<h4>Available Options <span>Color</span></h4>--}}
    {{--												<ul>--}}
    {{--													<li><a href="#" class="one"><i class="ti-check"></i></a></li>--}}
    {{--													<li><a href="#" class="two"><i class="ti-check"></i></a></li>--}}
    {{--													<li><a href="#" class="three"><i class="ti-check"></i></a></li>--}}
    {{--													<li><a href="#" class="four"><i class="ti-check"></i></a></li>--}}
    {{--												</ul>--}}
    {{--											</div> --}}
    {{--											<!--/ End Color -->--}}
    {{--											<!-- Size -->--}}
    {{--											@if($product_detail->size)--}}
    {{--												<div class="size mt-4">--}}
    {{--													<h4>Size</h4>--}}
    {{--													<ul>--}}
    {{--														@php --}}
    {{--															$sizes=explode(',',$product_detail->size);--}}
    {{--															// dd($sizes);--}}
    {{--														@endphp--}}
    {{--														@foreach($sizes as $size)--}}
    {{--														<li><a href="#" class="one">{{$size}}</a></li>--}}
    {{--														@endforeach--}}
    {{--													</ul>--}}
    {{--												</div>--}}
    {{--											@endif--}}
    {{--											<!--/ End Size -->--}}
    {{--											<!-- Product Buy -->--}}
    {{--											<div class="product-buy">--}}
    {{--												<form action="{{route('single-add-to-cart')}}" method="POST">--}}
    {{--													@csrf --}}
    {{--													<div class="quantity">--}}
    {{--														<h6>Quantity :</h6>--}}
    {{--														<!-- Input Order -->--}}
    {{--														<div class="input-group">--}}
    {{--															<div class="button minus">--}}
    {{--																<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">--}}
    {{--																	<i class="ti-minus"></i>--}}
    {{--																</button>--}}
    {{--															</div>--}}
    {{--															<input type="hidden" name="slug" value="{{$product_detail->slug}}">--}}
    {{--															<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1" id="quantity">--}}
    {{--															<div class="button plus">--}}
    {{--																<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">--}}
    {{--																	<i class="ti-plus"></i>--}}
    {{--																</button>--}}
    {{--															</div>--}}
    {{--														</div>--}}
    {{--													<!--/ End Input Order -->--}}
    {{--													</div>--}}
    {{--													<div class="add-to-cart mt-4">--}}
    {{--														<button type="submit" class="btn">Add to cart</button>--}}
    {{--														<a href="{{route('add-to-wishlist',$product_detail->slug)}}" class="btn min"><i class="ti-heart"></i></a>--}}
    {{--													</div>--}}
    {{--												</form>--}}

    {{--												<p class="cat">Category :<a href="{{route('product-cat',$product_detail->cat_info['slug'])}}">{{$product_detail->cat_info['title']}}</a></p>--}}
    {{--												@if($product_detail->sub_cat_info)--}}
    {{--												<p class="cat mt-1">Sub Category :<a href="{{route('product-sub-cat',[$product_detail->cat_info['slug'],$product_detail->sub_cat_info['slug']])}}">{{$product_detail->sub_cat_info['title']}}</a></p>--}}
    {{--												@endif--}}
    {{--												<p class="availability">Stock : @if($product_detail->stock>0)<span class="badge badge-success">{{$product_detail->stock}}</span>@else <span class="badge badge-danger">{{$product_detail->stock}}</span>  @endif</p>--}}
    {{--											</div>--}}
    {{--											<!--/ End Product Buy -->--}}
    {{--										</div>--}}
    {{--									</div>--}}
    {{--								</div>--}}
    {{--								<div class="row">--}}
    {{--									<div class="col-12">--}}
    {{--										<div class="product-info">--}}
    {{--											<div class="nav-main">--}}
    {{--												<!-- Tab Nav -->--}}
    {{--												<ul class="nav nav-tabs" id="myTab" role="tablist">--}}
    {{--													<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>--}}
    {{--													<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>--}}
    {{--												</ul>--}}
    {{--												<!--/ End Tab Nav -->--}}
    {{--											</div>--}}
    {{--											<div class="tab-content" id="myTabContent">--}}
    {{--												<!-- Description Tab -->--}}
    {{--												<div class="tab-pane fade show active" id="description" role="tabpanel">--}}
    {{--													<div class="tab-single">--}}
    {{--														<div class="row">--}}
    {{--															<div class="col-12">--}}
    {{--																<div class="single-des">--}}
    {{--																	<p>{!! ($product_detail->description) !!}</p>--}}
    {{--																</div>--}}
    {{--															</div>--}}
    {{--														</div>--}}
    {{--													</div>--}}
    {{--												</div>--}}
    {{--												<!--/ End Description Tab -->--}}
    {{--												<!-- Reviews Tab -->--}}
    {{--												<div class="tab-pane fade" id="reviews" role="tabpanel">--}}
    {{--													<div class="tab-single review-panel">--}}
    {{--														<div class="row">--}}
    {{--															<div class="col-12">--}}
    {{--																--}}
    {{--																<!-- Review -->--}}
    {{--																<div class="comment-review">--}}
    {{--																	<div class="add-review">--}}
    {{--																		<h5>Add A Review</h5>--}}
    {{--																		<p>Your email address will not be published. Required fields are marked</p>--}}
    {{--																	</div>--}}
    {{--																	<h4>Your Rating <span class="text-danger">*</span></h4>--}}
    {{--																	<div class="review-inner">--}}
    {{--																			<!-- Form -->--}}
    {{--																@auth--}}
    {{--																<form class="form" method="post" action="{{route('review.store',$product_detail->slug)}}">--}}
    {{--                                                                    @csrf--}}
    {{--                                                                    <div class="row">--}}
    {{--                                                                        <div class="col-lg-12 col-12">--}}
    {{--                                                                            <div class="rating_box">--}}
    {{--                                                                                  <div class="star-rating">--}}
    {{--                                                                                    <div class="star-rating__wrap">--}}
    {{--                                                                                      <input class="star-rating__input" id="star-rating-5" type="radio" name="rate" value="5">--}}
    {{--                                                                                      <label class="star-rating__ico fa fa-star-o" for="star-rating-5" title="5 out of 5 stars"></label>--}}
    {{--                                                                                      <input class="star-rating__input" id="star-rating-4" type="radio" name="rate" value="4">--}}
    {{--                                                                                      <label class="star-rating__ico fa fa-star-o" for="star-rating-4" title="4 out of 5 stars"></label>--}}
    {{--                                                                                      <input class="star-rating__input" id="star-rating-3" type="radio" name="rate" value="3">--}}
    {{--                                                                                      <label class="star-rating__ico fa fa-star-o" for="star-rating-3" title="3 out of 5 stars"></label>--}}
    {{--                                                                                      <input class="star-rating__input" id="star-rating-2" type="radio" name="rate" value="2">--}}
    {{--                                                                                      <label class="star-rating__ico fa fa-star-o" for="star-rating-2" title="2 out of 5 stars"></label>--}}
    {{--                                                                                      <input class="star-rating__input" id="star-rating-1" type="radio" name="rate" value="1">--}}
    {{--																					  <label class="star-rating__ico fa fa-star-o" for="star-rating-1" title="1 out of 5 stars"></label>--}}
    {{--																					  @error('rate')--}}
    {{--																						<span class="text-danger">{{$message}}</span>--}}
    {{--																					  @enderror--}}
    {{--                                                                                    </div>--}}
    {{--                                                                                  </div>--}}
    {{--                                                                            </div>--}}
    {{--                                                                        </div>--}}
    {{--																		<div class="col-lg-12 col-12">--}}
    {{--																			<div class="form-group">--}}
    {{--																				<label>Write a review</label>--}}
    {{--																				<textarea name="review" rows="6" placeholder="" ></textarea>--}}
    {{--																			</div>--}}
    {{--																		</div>--}}
    {{--																		<div class="col-lg-12 col-12">--}}
    {{--																			<div class="form-group button5">	--}}
    {{--																				<button type="submit" class="btn">Submit</button>--}}
    {{--																			</div>--}}
    {{--																		</div>--}}
    {{--																	</div>--}}
    {{--																</form>--}}
    {{--																@else --}}
    {{--																<p class="text-center p-5">--}}
    {{--																	You need to <a href="{{route('login.form')}}" style="color:rgb(54, 54, 204)">Login</a> OR <a style="color:blue" href="{{route('register.form')}}">Register</a>--}}

    {{--																</p>--}}
    {{--																<!--/ End Form -->--}}
    {{--																@endauth--}}
    {{--																	</div>--}}
    {{--																</div>--}}
    {{--															--}}
    {{--																<div class="ratting-main">--}}
    {{--																	<div class="avg-ratting">--}}
    {{--																		--}}{{-- @php --}}
    {{--																			$rate=0;--}}
    {{--																			foreach($product_detail->rate as $key=>$rate){--}}
    {{--																				$rate +=$rate--}}
    {{--																			}--}}
    {{--																		@endphp --}}
    {{--																		<h4>{{ceil($product_detail->getReview->avg('rate'))}} <span>(Overall)</span></h4>--}}
    {{--																		<span>Based on {{$product_detail->getReview->count()}} Comments</span>--}}
    {{--																	</div>--}}
    {{--																	@foreach($product_detail['getReview'] as $data)--}}
    {{--																	<!-- Single Rating -->--}}
    {{--																	<div class="single-rating">--}}
    {{--																		<div class="rating-author">--}}
    {{--																			@if($data->user_info['photo'])--}}
    {{--																			<img src="{{$data->user_info['photo']}}" alt="{{$data->user_info['photo']}}">--}}
    {{--																			@else --}}
    {{--																			<img src="{{asset('backend/img/avatar.png')}}" alt="Profile.jpg">--}}
    {{--																			@endif--}}
    {{--																		</div>--}}
    {{--																		<div class="rating-des">--}}
    {{--																			<h6>{{$data->user_info['name']}}</h6>--}}
    {{--																			<div class="ratings">--}}

    {{--																				<ul class="rating">--}}
    {{--																					@for($i=1; $i<=5; $i++)--}}
    {{--																						@if($data->rate>=$i)--}}
    {{--																							<li><i class="fa fa-star"></i></li>--}}
    {{--																						@else --}}
    {{--																							<li><i class="fa fa-star-o"></i></li>--}}
    {{--																						@endif--}}
    {{--																					@endfor--}}
    {{--																				</ul>--}}
    {{--																				<div class="rate-count">(<span>{{$data->rate}}</span>)</div>--}}
    {{--																			</div>--}}
    {{--																			<p>{{$data->review}}</p>--}}
    {{--																		</div>--}}
    {{--																	</div>--}}
    {{--																	<!--/ End Single Rating -->--}}
    {{--																	@endforeach--}}
    {{--																</div>--}}
    {{--																--}}
    {{--																<!--/ End Review -->--}}
    {{--																--}}
    {{--															</div>--}}
    {{--														</div>--}}
    {{--													</div>--}}
    {{--												</div>--}}
    {{--												<!--/ End Reviews Tab -->--}}
    {{--											</div>--}}
    {{--										</div>--}}
    {{--									</div>--}}
    {{--								</div>--}}
    {{--							</div>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--		</section>--}}
    {{--		<!--/ End Shop Single -->--}}
    {{--		--}}
    {{--		<!-- Start Most Popular -->--}}
    {{--	<div class="product-area most-popular related-product section">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--				<div class="col-12">--}}
    {{--					<div class="section-title">--}}
    {{--						<h2>Related Products</h2>--}}
    {{--					</div>--}}
    {{--				</div>--}}
    {{--            </div>--}}
    {{--            <div class="row">--}}
    {{--                --}}{{-- {{$product_detail->rel_prods}} --}}
    {{--                <div class="col-12">--}}
    {{--                    <div class="owl-carousel popular-slider">--}}
    {{--                        @foreach($product_detail->rel_prods as $data)--}}
    {{--                            @if($data->id !==$product_detail->id)--}}
    {{--                                <!-- Start Single Product -->--}}
    {{--                                <div class="single-product">--}}
    {{--                                    <div class="product-img">--}}
    {{--										<a href="{{route('product-detail',$data->slug)}}">--}}
    {{--											@php --}}
    {{--												$photo=explode(',',$data->photo);--}}
    {{--											@endphp--}}
    {{--                                            <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">--}}
    {{--                                            <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">--}}
    {{--                                            <span class="price-dec">{{$data->discount}} % Off</span>--}}
    {{--                                                                    --}}{{-- <span class="out-of-stock">Hot</span> --}}
    {{--                                        </a>--}}
    {{--                                        <div class="button-head">--}}
    {{--                                            <div class="product-action">--}}
    {{--                                                <a data-toggle="modal" data-target="#modelExample" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>--}}
    {{--                                                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>--}}
    {{--                                                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>--}}
    {{--                                            </div>--}}
    {{--                                            <div class="product-action-2">--}}
    {{--                                                <a title="Add to cart" href="#">Add to cart</a>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="product-content">--}}
    {{--                                        <h3><a href="{{route('product-detail',$data->slug)}}">{{$data->title}}</a></h3>--}}
    {{--                                        <div class="product-price">--}}
    {{--                                            @php --}}
    {{--                                                $after_discount=($data->price-(($data->discount*$data->price)/100));--}}
    {{--                                            @endphp--}}
    {{--                                            <span class="old">${{number_format($data->price,2)}}</span>--}}
    {{--                                            <span>${{number_format($after_discount,2)}}</span>--}}
    {{--                                        </div>--}}
    {{--                                      --}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <!-- End Single Product -->--}}
    {{--                                	--}}
    {{--                            @endif--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--	<!-- End Most Popular Area -->--}}
    {{--	--}}



    <div class="container mx-auto border p-5">
        <div class="grid grid-cols-3 gap-5">
            <button class="text-white p-4 rounded bg-gray-800 shadow-md capitalize">{{__("reviews")}}</button>
        </div>

        @auth
            {{--            <form class="form" method="post" action="{{route('review.store',$product_detail->slug)}}">--}}
            {{--            @csrf--}}
            {{--                <div class="row">--}}
            {{--                    <div class="col-lg-12 col-12">--}}
            {{--                        <div class="rating_box">--}}
            {{--                            <div class="star-rating">--}}
            {{--                                <div class="star-rating__wrap">--}}
            {{--                                    <input class="star-rating__input" id="star-rating-5" type="radio" name="rate"--}}
            {{--                                           value="5">--}}
            {{--                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-5"--}}
            {{--                                           title="5 out of 5 stars"></label>--}}
            {{--                                    <input class="star-rating__input" id="star-rating-4" type="radio" name="rate"--}}
            {{--                                           value="4">--}}
            {{--                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-4"--}}
            {{--                                           title="4 out of 5 stars"></label>--}}
            {{--                                    <input class="star-rating__input" id="star-rating-3" type="radio" name="rate"--}}
            {{--                                           value="3">--}}
            {{--                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-3"--}}
            {{--                                           title="3 out of 5 stars"></label>--}}
            {{--                                    <input class="star-rating__input" id="star-rating-2" type="radio" name="rate"--}}
            {{--                                           value="2">--}}
            {{--                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-2"--}}
            {{--                                           title="2 out of 5 stars"></label>--}}
            {{--                                    <input class="star-rating__input" id="star-rating-1" type="radio" name="rate"--}}
            {{--                                           value="1">--}}
            {{--                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-1"--}}
            {{--                                           title="1 out of 5 stars"></label>--}}
            {{--                                    @error('rate')--}}
            {{--                                    <span class="text-danger">{{$message}}</span>--}}
            {{--                                    @enderror--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-lg-12 col-12">--}}
            {{--                        <div class="form-group">--}}
            {{--                            <label>Write a review</label>--}}
            {{--                            <textarea name="review" rows="6" placeholder=""></textarea>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="col-lg-12 col-12">--}}
            {{--                        <div class="form-group button5">--}}
            {{--                            <button type="submit" class="btn">Submit</button>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </form>--}}
            <div class="flex mx-auto items-center justify-center shadow-lg mx-8 mb-4 w-full">
                <form class="w-full bg-white rounded-lg px-4 pt-2" method="post"
                      action="{{route('review.store',[app()->getLocale(),$product_detail->slug])}}">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <input type="hidden" name="slug" value="{{$product_detail->slug}}">
                        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                        <div class="rating_box">
                            <div class="star-rating">
                                <div class="star-rating__wrap">
                                    <input class="star-rating__input" id="star-rating-5" type="radio" name="rate"
                                           value="5">
                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-5"
                                           title="5 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-4" type="radio" name="rate"
                                           value="4">
                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-4"
                                           title="4 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-3" type="radio" name="rate"
                                           value="3">
                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-3"
                                           title="3 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-2" type="radio" name="rate"
                                           value="2">
                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-2"
                                           title="2 out of 5 stars"></label>
                                    <input class="star-rating__input" id="star-rating-1" type="radio" name="rate"
                                           value="1">
                                    <label class="star-rating__ico fa fa-star-o" for="star-rating-1"
                                           title="1 out of 5 stars"></label>
                                    @error('rate')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-full px-3 mb-2 mt-2">
                            <textarea
                                class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                                name="review" placeholder='Type Your Comment' required></textarea>
                        </div>
                        <div class="w-full md:w-full flex items-start md:w-full px-3">
                            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
                            </div>
                            <div class="-mr-1">
                                <input type='submit'
                                       class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"
                                       value='Post Comment'>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @else
            <p class="text-center p-5">
                {{__("You need to")}}<a href="{{route('login.form')}}"
                                        style="color:rgb(54, 54, 204)">{{__("Login")}}</a>{{__("OR")}} <a
                    style="color:blue"
                    href="{{route('register.form')}}">{{__("Register")}}</a> {{__("to add your review")}}

            </p>
            <!--/ End Form -->
        @endauth
        @foreach($product_detail['getReview'] as $data)
            <div class="flex my-2 drop-shadow-2xl items-center bg-gray-300 rounded-lg px-5">
                @if($data->user_info['photo'])
                    <img src="{{$data->user_info['photo']}}" alt="boy with camera"
                         class="rounded-full w-20 h-20 object-cover">
                @else
                    <img src="{{asset('backend/img/avatar.png')}}" alt="boy with camera"
                         class="rounded-full w-20 h-20 object-cover">
                @endif

                <div class="p-8">
                    <h3 class="font-bold text-2xl mb-5">{{$data->user_info['name']}}</h3>
                    <p>{{$data->review}}</p>
                </div>
            </div>
            <!-- Single Rating -->
            {{--            <div class="single-rating">--}}
            {{--                <div class="rating-author">--}}
            {{--                    @if($data->user_info['photo'])--}}
            {{--                        <img src="{{$data->user_info['photo']}}" alt="{{$data->user_info['photo']}}">--}}
            {{--                    @else--}}
            {{--                        <img src="{{asset('backend/img/avatar.png')}}" alt="Profile.jpg">--}}
            {{--                    @endif--}}
            {{--                </div>--}}
            {{--                <div class="rating-des">--}}
            {{--                    <h6>{{$data->user_info['name']}}</h6>--}}
            {{--                    <div class="ratings">--}}

            {{--                        <ul class="rating">--}}
            {{--                            @for($i=1; $i<=5; $i++)--}}
            {{--                                @if($data->rate>=$i)--}}
            {{--                                    <li><i class="fa fa-star"></i></li>--}}
            {{--                                @else--}}
            {{--                                    <li><i class="fa fa-star-o"></i></li>--}}
            {{--                                @endif--}}
            {{--                            @endfor--}}
            {{--                        </ul>--}}
            {{--                        <div class="rate-count">(<span>{{$data->rate}}</span>)</div>--}}
            {{--                    </div>--}}
            {{--                    <p>{{$data->review}}</p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        <!--/ End Single Rating -->
        @endforeach

    </div>
@endsection
@push('styles')
    <style>
        /* Rating */
        .rating_box {
            display: inline-flex;
        }

        .star-rating {
            font-size: 0;
            padding-left: 10px;
            padding-right: 10px;
        }

        .star-rating__wrap {
            display: inline-block;
            font-size: 1rem;
        }

        .star-rating__wrap:after {
            content: "";
            display: table;
            clear: both;
        }

        .star-rating__ico {
            float: right;
            padding-left: 2px;
            cursor: pointer;
            color: #F7941D;
            font-size: 16px;
            margin-top: 5px;
        }

        .star-rating__ico:last-child {
            padding-left: 0;
        }

        .star-rating__input {
            display: none;
        }

        .star-rating__ico:hover:before,
        .star-rating__ico:hover ~ .star-rating__ico:before,
        .star-rating__input:checked ~ .star-rating__ico:before {
            content: "\F005";
        }

    </style>
@endpush
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=$('#quantity').val();
            var pro_id=$(this).data('id');
            // alert(quantity);
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							document.location.href=document.location.href;
						});
                    }
                }
            })
        });
    </script> --}}

@endpush
