@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')

    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        @php
            $settings=DB::table('settings')->first();
        @endphp
        <p class="font-normal text-sm leading-3 text-indigo-700 hover:text-indigo-800 cursor-pointer pb-2">{{__("about")}}</p>
        <div class="flex lg:flex-row flex-col lg:gap-8 sm:gap-10 gap-12">
            <div class="w-full lg:w-6/12">
                <h2 class="w-full font-bold lg:text-4xl text-3xl lg:leading-10 leading-9">{{$settings->short_des}}</h2>
                <p class="font-normal text-base leading-6 text-gray-600 mt-6">{{$settings->description}}</p>
            </div>
            <div class="w-full lg:w-6/12">
                <img class="lg:block hidden w-full" src="{{$settings->photo}}" alt="people discussing on board"/>
                <img class="lg:hidden sm:block hidden w-full" src="{{$settings->photo}}"
                     alt="people discussing on board"/>
                <img class="sm:hidden block w-full" src="{{$settings->photo}}" alt="people discussing on board"/>
            </div>
        </div>

        <div class="sm:hidden block relative mt-8">
            <div class="grid sm:grid-cols-3 grid-cols-2 sm:gap-8 gap-4">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/about-us-3-svg3.svg" alt="user"/>
            </div>
            <hr class="z-10 absolute top-2/4 w-full bg-gray-200"/>
        </div>
    </div>

    <!-- About Us -->
    {{--	<section class="about-us section">--}}
    {{--			<div class="container">--}}
    {{--				<div class="row">--}}
    {{--					<div class="col-lg-6 col-12">--}}
    {{--						<div class="about-content">--}}
    {{--							@php--}}
    {{--								$settings=DB::table('settings')->get();--}}
    {{--							@endphp--}}
    {{--							<h3>Welcome To <span>Eshop</span></h3>--}}
    {{--							<p>@foreach($settings as $data) {!! $data->description!!} @endforeach</p>--}}
    {{--							<div class="button">--}}
    {{--								<a href="{{route('blog')}}" class="btn">Our Blog</a>--}}
    {{--								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>--}}
    {{--							</div>--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--					<div class="col-lg-6 col-12">--}}
    {{--						<div class="about-img overlay">--}}
    {{--							--}}{{-- <div class="button">--}}
    {{--								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>--}}
    {{--							</div> --}}
    {{--							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">--}}
    {{--						</div>--}}
    {{--					</div>--}}
    {{--				</div>--}}
    {{--			</div>--}}
    {{--	</section>--}}
    <!-- End About Us -->

    <!-- Start Team -->
    {{-- <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Expert Team</h2>
                        <p>Business consulting excepteur sint occaecat cupidatat consulting non proident, sunt in culpa qui officia deserunt laborum market. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <!-- Image -->
                        <div class="image">
                            <img src="images/team/team1.jpg" alt="#">
                        </div>
                        <!-- End Image -->
                        <div class="info-head">
                            <!-- Info Box -->
                            <div class="info-box">
                                <h4 class="name"><a href="#">Dahlia Moore</a></h4>
                                <span class="designation">Senior Manager</span>
                            </div>
                            <!-- End Info Box -->
                            <!-- Social -->
                            <div class="social-links">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Social -->
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <!-- Image -->
                        <div class="image">
                            <img src="images/team/team2.jpg" alt="#">
                        </div>
                        <!-- End Image -->
                        <div class="info-head">
                            <!-- Info Box -->
                            <div class="info-box">
                                <h4 class="name"><a href="#">Jhone digo</a></h4>
                                <span class="designation">Markeitng</span>
                            </div>
                            <!-- End Info Box -->
                            <!-- Social -->
                            <div class="social-links">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Social -->
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <!-- Image -->
                        <div class="image">
                            <img src="images/team/team3.jpg" alt="#">
                        </div>
                        <!-- End Image -->
                        <div class="info-head">
                            <!-- Info Box -->
                            <div class="info-box">
                                <h4 class="name"><a href="#">Zara tingo</a></h4>
                                <span class="designation">Web Developer</span>
                            </div>
                            <!-- End Info Box -->
                            <!-- Social -->
                            <div class="social-links">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Social -->
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team">
                        <!-- Image -->
                        <div class="image">
                            <img src="images/team/team4.jpg" alt="#">
                        </div>
                        <!-- End Image -->
                        <div class="info-head">
                            <!-- Info Box -->
                            <div class="info-box">
                                <h4 class="name"><a href="#">David Zone</a></h4>
                                <span class="designation">SEO Expert</span>
                            </div>
                            <!-- End Info Box -->
                            <!-- Social -->
                            <div class="social-links">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Social -->
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->
            </div>
        </div>
    </section> --}}
    <!--/ End Team Area -->

    @include('frontend.layouts.newsletter')
@endsection
