@extends('frontend.layouts.master')
@section('title','Cart Page')
@section('main-content')

    <div class="w-full h-screen overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700"
         id="checkout">
        <div class="flex items-end lg:flex-row flex-col justify-center" id="cart">
            <div
                class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-hidden overflow-x-hidden lg:h-screen h-auto"
                id="scroll">
                <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer"
                     onclick="checkoutHandler(false)">
                    <img class="dark:hidden"
                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shopping-cart-1-svg1.svg" alt="previous"/>
                    <img class="dark:block hidden"
                         src="https://tuk-cdn.s3.amazonaws.com/can-uploader/shopping-cart-1-svg1dark.svg"
                         alt="previous"/>
                    <a href="{{route('home',app()->getLocale())}}"
                       class="text-sm pl-2 leading-none dark:hover:text-gray-200 capitalize">{{__("back")}}</a>
                </div>
                <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3 capitalize">{{__("shopping cart")}}</p>
                <form action="{{route('cart.update',app()->getLocale())}}" method="POST">
                    @csrf
                    @if(Helper::getAllProductFromCart())
                        @foreach(Helper::getAllProductFromCart() as $key=>$cart)
                            <div class="md:flex items-strech py-8 md:py-10 lg:py-8 border-t border-gray-50">
                                <div class="md:w-4/12 2xl:w-1/4 w-full">
                                    @php
                                        $photo=explode(',',$cart->product['photo']);
                                    @endphp
                                    <img src="{{$photo[0]}}" alt="Black Leather Bag"
                                         class="h-32  object-center object-cover md:block hidden"/>
                                </div>
                                <div class="md:pl-3 md:w-8/12 2xl:w-3/4 flex flex-col justify-center">
                                    <div class="flex items-center justify-between w-full pt-1">
                                        <p class="text-base font-black leading-none text-gray-800 dark:text-white">{{$cart->product['title']}}</p>
                                        <select name="quant[{{$key}}]" aria-label="Select quantity"
                                                value="{{$cart->quantity}}"
                                                class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                            <option value="1" @if($cart->quantity == 1 ) selected @endif>01</option>
                                            <option value="2" @if($cart->quantity == 2 ) selected @endif>02</option>
                                            <option value="3" @if($cart->quantity == 3 ) selected @endif>03</option>
                                            <option value="4" @if($cart->quantity == 4 ) selected @endif>04</option>
                                            <option value="5" @if($cart->quantity == 5 ) selected @endif>05</option>
                                            <option value="6" @if($cart->quantity == 6 ) selected @endif>06</option>
                                            <option value="7" @if($cart->quantity == 7 ) selected @endif>07</option>
                                            <option value="8" @if($cart->quantity == 8 ) selected @endif>08</option>
                                            <option value="9" @if($cart->quantity == 9 ) selected @endif>09</option>
                                            <option value="10" @if($cart->quantity ==10 ) selected @endif>10</option>

                                        </select>
                                    </div>
                                    {{--                                    <input type="hidden"  class="input-number" data-min="1"--}}
                                    {{--                                           data-max="100" >--}}
                                    <input type="hidden" name="qty_id[]" value="{{$cart->id}}">
                                    <div class="flex items-center justify-between pt-5">
                                        <div class="flex itemms-center">
                                            <a href="{{route('cart-delete',[app()->getLocale(),$cart->id])}}"
                                               class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">{{__("Remove")}}</a>
                                        </div>
                                        <p class="text-base font-black leading-none text-gray-800 dark:text-white">{{number_format($cart['price'],2)}}
                                            {{__("MAD")}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="w-full flex flex-row justify-end">
                        <button type="submit" class="py-2 px-4 bg-yellow-500 text-white">{{__("Update")}}</button>
                    </div>
                </form>
                <div class="w-full flex flex-row">
                    <form action="{{route('coupon-store',app()->getLocale())}}" method="POST">
                        @csrf
                        <input name="code" placeholder="{{__("Apply Coupon")}}">
                        <button class="py-2 px-4 bg-yellow-500 text-white">{{__("Apply")}}</button>
                    </form>
                </div>
                {{--                @if(Helper::getAllProductFromCart())--}}
                {{--									@foreach(Helper::getAllProductFromCart() as $key=>$cart)--}}
                {{--										<tr>--}}
                {{--											@php--}}
                {{--											$photo=explode(',',$cart->product['photo']);--}}
                {{--											@endphp--}}
                {{--											<td class="image" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></td>--}}
                {{--											<td class="product-des" data-title="Description">--}}
                {{--												<p class="product-name"><a href="{{route('product-detail',$cart->product['slug'])}}" target="_blank">{{$cart->product['title']}}</a></p>--}}
                {{--												<p class="product-des">{!!($cart['summary']) !!}</p>--}}
                {{--											</td>--}}
                {{--											<td class="price" data-title="Price"><span>${{number_format($cart['price'],2)}}</span></td>--}}
                {{--											<td class="qty" data-title="Qty"><!-- Input Order -->--}}
                {{--												<div class="input-group">--}}
                {{--													<div class="button minus">--}}
                {{--														<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$key}}]">--}}
                {{--															<i class="ti-minus"></i>--}}
                {{--														</button>--}}
                {{--													</div>--}}
                {{--													<input type="text" name="quant[{{$key}}]" class="input-number"  data-min="1" data-max="100" value="{{$cart->quantity}}">--}}
                {{--													<input type="hidden" name="qty_id[]" value="{{$cart->id}}">--}}
                {{--													<div class="button plus">--}}
                {{--														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{$key}}]">--}}
                {{--															<i class="ti-plus"></i>--}}
                {{--														</button>--}}
                {{--													</div>--}}
                {{--												</div>--}}
                {{--												<!--/ End Input Order -->--}}
                {{--											</td>--}}
                {{--											<td class="total-amount cart_single_price" data-title="Total"><span class="money">${{$cart['amount']}}</span></td>--}}

                {{--											<td class="action" data-title="Remove"><a href="{{route('cart-delete',$cart->id)}}"><i class="ti-trash remove-icon"></i></a></td>--}}
                {{--										</tr>--}}
                {{--									@endforeach--}}
                {{--									<track>--}}
                {{--										<td></td>--}}
                {{--										<td></td>--}}
                {{--										<td></td>--}}
                {{--										<td></td>--}}
                {{--										<td></td>--}}
                {{--										<td class="float-right">--}}
                {{--											<button class="btn float-right" type="submit">Update</button>--}}
                {{--										</td>--}}
                {{--									</track>--}}
                {{--								@else--}}
                {{--										<tr>--}}
                {{--											<td class="text-center">--}}
                {{--												There are no any carts available. <a href="{{route('product-grids')}}" style="color:blue;">Continue shopping</a>--}}

                {{--											</td>--}}
                {{--										</tr>--}}
                {{--								@endif--}}
            </div>
            <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
                <div
                    class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
                    <div>
                        <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">{{__("Summary")}}</p>
                        <div class="flex items-center justify-between pt-16">
                            <p class="text-base leading-none text-gray-800 dark:text-white">{{__("Subtotal")}}</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white">{{number_format(Helper::totalCartPrice(),2)}}
                                {{__("MAD")}}</p>
                        </div>
                        @if(session()->has('coupon'))
                            <div class="flex items-center justify-between pt-5">
                                <p class="text-base leading-none text-gray-800 dark:text-white capitalize">{{__("You saved")}}</p>
                                <p class="text-base leading-none text-gray-800 dark:text-white cap">{{number_format(Session::get('coupon')['value'],2)}}
                                    {{__("MAD")}}</p>
                            </div>
                        @endif
                        <div class="flex items-center justify-between pt-5">
                            <p class="text-base leading-none text-gray-800 dark:text-white">{{__("Tax")}}</p>
                            <p class="text-base leading-none text-gray-800 dark:text-white">0 {{__("MAD")}}</p>
                        </div>
                    </div>
                    <div>


                        <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                            <p class="text-2xl leading-normal text-gray-800 dark:text-white">{{__("total")}}</p>
                            @php
                                $total_amount=Helper::totalCartPrice();
                                if(session()->has('coupon')){
                                    $total_amount=$total_amount-Session::get('coupon')['value'];

                                }
                            @endphp
                            @if(session()->has('coupon'))
                                <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">

                                    {{number_format($total_amount,2)}}  {{__("MAD")}}</p>
                            @else
                                <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white">

                                    {{number_format($total_amount,2)}} {{__("MAD")}}</p>
                            @endif
                        </div>
                        <a href="{{route('checkout',app()->getLocale())}}"
                           class="text-base leading-none w-full py-5 px-32 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">
                            {{__("Checkout")}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--	<!-- Breadcrumbs -->--}}
    {{--	<div class="breadcrumbs">--}}
    {{--		<div class="container">--}}
    {{--			<div class="row">--}}
    {{--				<div class="col-12">--}}
    {{--					<div class="bread-inner">--}}
    {{--						<ul class="bread-list">--}}
    {{--							<li><a href="{{('home')}}">Home<i class="ti-arrow-right"></i></a></li>--}}
    {{--							<li class="active"><a href="">Cart</a></li>--}}
    {{--						</ul>--}}
    {{--					</div>--}}
    {{--				</div>--}}
    {{--			</div>--}}
    {{--		</div>--}}
    {{--	</div>--}}
    {{--	<!-- End Breadcrumbs -->--}}

    <!-- Shopping Cart -->
    {{--        <div class="shopping-cart section">--}}
    {{--            <div class="container">--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-12">--}}
    {{--                        <!-- Shopping Summery -->--}}
    {{--                        <table class="table shopping-summery">--}}
    {{--                            <thead>--}}
    {{--                            <tr class="main-hading">--}}
    {{--                                <th>PRODUCT</th>--}}
    {{--                                <th>NAME</th>--}}
    {{--                                <th class="text-center">UNIT PRICE</th>--}}
    {{--                                <th class="text-center">QUANTITY</th>--}}
    {{--                                <th class="text-center">TOTAL</th>--}}
    {{--                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>--}}
    {{--                            </tr>--}}
    {{--                            </thead>--}}
    {{--                            <tbody id="cart_item_list">--}}
    {{--                            <form action="{{route('cart.update')}}" method="POST">--}}
    {{--                                @csrf--}}
    {{--                                @if(Helper::getAllProductFromCart())--}}
    {{--                                    @foreach(Helper::getAllProductFromCart() as $key=>$cart)--}}
    {{--                                        <tr>--}}
    {{--                                            @php--}}
    {{--                                                $photo=explode(',',$cart->product['photo']);--}}
    {{--                                            @endphp--}}
    {{--                                            <td class="image" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}">--}}
    {{--                                            </td>--}}
    {{--                                            <td class="product-des" data-title="Description">--}}
    {{--                                                <p class="product-name"><a--}}
    {{--                                                        href="{{route('product-detail',$cart->product['slug'])}}"--}}
    {{--                                                        target="_blank">{{$cart->product['title']}}</a></p>--}}
    {{--                                                <p class="product-des">{!!($cart['summary']) !!}</p>--}}
    {{--                                            </td>--}}
    {{--                                            <td class="price" data-title="Price">--}}
    {{--                                                <span>${{number_format($cart['price'],2)}}</span></td>--}}
    {{--                                            <td class="qty" data-title="Qty"><!-- Input Order -->--}}
    {{--                                                <div class="input-group">--}}
    {{--                                                    <div class="button minus">--}}
    {{--                                                        <button type="button" class="btn btn-primary btn-number"--}}
    {{--                                                                disabled="disabled" data-type="minus"--}}
    {{--                                                                data-field="quant[{{$key}}]">--}}
    {{--                                                            <i class="ti-minus"></i>--}}
    {{--                                                        </button>--}}
    {{--                                                    </div>--}}
    {{--                                                    <input type="text" name="quant[{{$key}}]" class="input-number"--}}
    {{--                                                           data-min="1" data-max="100" value="{{$cart->quantity}}">--}}
    {{--                                                    <input type="hidden" name="qty_id[]" value="{{$cart->id}}">--}}
    {{--                                                    <div class="button plus">--}}
    {{--                                                        <button type="button" class="btn btn-primary btn-number"--}}
    {{--                                                                data-type="plus" data-field="quant[{{$key}}]">--}}
    {{--                                                            <i class="ti-plus"></i>--}}
    {{--                                                        </button>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <!--/ End Input Order -->--}}
    {{--                                            </td>--}}
    {{--                                            <td class="total-amount cart_single_price" data-title="Total"><span--}}
    {{--                                                    class="money">${{$cart['amount']}}</span></td>--}}

    {{--                                            <td class="action" data-title="Remove"><a--}}
    {{--                                                    href="{{route('cart-delete',$cart->id)}}"><i--}}
    {{--                                                        class="ti-trash remove-icon"></i></a></td>--}}
    {{--                                        </tr>--}}
    {{--                                    @endforeach--}}
    {{--                                    <track>--}}
    {{--                                    <td></td>--}}
    {{--                                    <td></td>--}}
    {{--                                    <td></td>--}}
    {{--                                    <td></td>--}}
    {{--                                    <td></td>--}}
    {{--                                    <td class="float-right">--}}
    {{--                                        <button class="btn float-right" type="submit">Update</button>--}}
    {{--                                    </td>--}}
    {{--                                    </track>--}}
    {{--                                @else--}}
    {{--                                    <tr>--}}
    {{--                                        <td class="text-center">--}}
    {{--                                            There are no any carts available. <a href="{{route('product-grids')}}"--}}
    {{--                                                                                 style="color:blue;">Continue shopping</a>--}}

    {{--                                        </td>--}}
    {{--                                    </tr>--}}
    {{--                                @endif--}}

    {{--                            </form>--}}
    {{--                            </tbody>--}}
    {{--                        </table>--}}
    {{--                        <!--/ End Shopping Summery -->--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-12">--}}
    {{--                        <!-- Total Amount -->--}}
    {{--                        <div class="total-amount">--}}
    {{--                            <div class="row">--}}
    {{--                                <div class="col-lg-8 col-md-5 col-12">--}}
    {{--                                    <div class="left">--}}
    {{--                                        <div class="coupon">--}}
    {{--                                            <form action="{{route('coupon-store')}}" method="POST">--}}
    {{--                                                @csrf--}}
    {{--                                                <input name="code" placeholder="Enter Your Coupon">--}}
    {{--                                                <button class="btn">Apply</button>--}}
    {{--                                            </form>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="checkbox">`--}}
    {{--                                            @php--}}
    {{--                                                $shipping=DB::table('shippings')->where('status','active')->limit(1)->get();--}}
    {{--                                            @endphp--}}
    {{--                                            <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"--}}
    {{--                                                                                          onchange="showMe('shipping');">--}}
    {{--                                                Shipping</label>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="col-lg-4 col-md-7 col-12">--}}
    {{--                                    <div class="right">--}}
    {{--                                        <ul>--}}
    {{--                                            <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart--}}
    {{--                                                Subtotal<span>${{number_format(Helper::totalCartPrice(),2)}}</span></li>--}}
    {{--                                            <div id="shipping" style="display:none;">--}}
    {{--                                                <li class="shipping">--}}
    {{--                                                    Shipping {{session('shipping_price')}}--}}
    {{--                                                    @if(count(Helper::shipping())>0 && Helper::cartCount()>0)--}}
    {{--                                                        <div class="form-select">--}}
    {{--                                                            <select name="shipping" class="nice-select">--}}
    {{--                                                                <option value="">Select</option>--}}
    {{--                                                                @foreach(Helper::shipping() as $shipping)--}}
    {{--                                                                    <option value="{{$shipping->id}}" class="shippingOption"--}}
    {{--                                                                            data-price="{{$shipping->price}}">{{$shipping->type}}--}}
    {{--                                                                        : ${{$shipping->price}}</option>--}}
    {{--                                                                @endforeach--}}
    {{--                                                            </select>--}}
    {{--                                                        </div>--}}
    {{--                                                    @else--}}
    {{--                                                        <div class="form-select">--}}
    {{--                                                            <span>Free</span>--}}
    {{--                                                        </div>--}}
    {{--                                                    @endif--}}
    {{--                                                </li>--}}
    {{--                                            </div>--}}

    {{--                                            {{dd(Session::get('coupon')['value'])}}--}}
    {{--                                            @if(session()->has('coupon'))--}}
    {{--                                                <li class="coupon_price" data-price="{{Session::get('coupon')['value']}}">--}}
    {{--                                                    You--}}
    {{--                                                    Save<span>${{number_format(Session::get('coupon')['value'],2)}}</span>--}}
    {{--                                                </li>--}}
    {{--                                            @endif--}}
    {{--                                            @php--}}
    {{--                                                $total_amount=Helper::totalCartPrice();--}}
    {{--                                                if(session()->has('coupon')){--}}
    {{--                                                    $total_amount=$total_amount-Session::get('coupon')['value'];--}}
    {{--                                                }--}}
    {{--                                            @endphp--}}
    {{--                                            @if(session()->has('coupon'))--}}
    {{--                                                <li class="last" id="order_total_price">You--}}
    {{--                                                    Pay<span>${{number_format($total_amount,2)}}</span></li>--}}
    {{--                                            @else--}}
    {{--                                                <li class="last" id="order_total_price">You--}}
    {{--                                                    Pay<span>${{number_format($total_amount,2)}}</span></li>--}}
    {{--                                            @endif--}}
    {{--                                        </ul>--}}
    {{--                                        <div class="button5">--}}
    {{--                                            <a href="{{route('checkout')}}" class="btn">Checkout</a>--}}
    {{--                                            <a href="{{route('product-grids')}}" class="btn">Continue shopping</a>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!--/ End Total Amount -->--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    <!--/ End Shopping Cart -->


    <!-- Start Shop Newsletter  -->
    @include('frontend.layouts.newsletter')
    <!-- End Shop Newsletter -->



@endsection
@push('styles')
    <style>
        li.shipping {
            display: inline-flex;
            width: 100%;
            font-size: 14px;
        }

        li.shipping .input-group-icon {
            width: 100%;
            margin-left: 10px;
        }

        .input-group-icon .icon {
            position: absolute;
            left: 20px;
            top: 0;
            line-height: 40px;
            z-index: 3;
        }

        .form-select {
            height: 30px;
            width: 100%;
        }

        .form-select .nice-select {
            border: none;
            border-radius: 0px;
            height: 40px;
            background: #f6f6f6 !important;
            padding-left: 45px;
            padding-right: 40px;
            width: 100%;
        }

        .list li {
            margin-bottom: 0 !important;
        }

        .list li:hover {
            background: #F7941D !important;
            color: white !important;
        }

        .form-select .nice-select::after {
            top: 14px;
        }

        /* width */
        #scroll::-webkit-scrollbar {
            width: 1px;
        }

        /* Track */
        #scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        #scroll::-webkit-scrollbar-thumb {
            background: rgb(133, 132, 132);
        }
    </style>
@endpush
@push('scripts')
    <script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("select.select2").select2();
        });
        $('select.nice-select').niceSelect();
    </script>
    <script>
        $(document).ready(function () {
            $('.shipping select[name=shipping]').change(function () {
                let cost = parseFloat($(this).find('option:selected').data('price')) || 0;
                let subtotal = parseFloat($('.order_subtotal').data('price'));
                let coupon = parseFloat($('.coupon_price').data('price')) || 0;
                // alert(coupon);
                $('#order_total_price span').text('$' + (subtotal + cost - coupon).toFixed(2));
            });

        });

    </script>

@endpush
