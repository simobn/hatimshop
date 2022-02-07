@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')
    <div
        class="flex justify-center items-center 2xl:container 2xl:mx-auto lg:py-16 md:py-12 py-9 px-4 md:px-6 lg:px-20 xl:px-44">
        <div
            class="flex w-full sm:w-9/12 lg:w-full flex-col lg:flex-row justify-center items-center lg:space-x-10 2xl:space-x-36 space-y-12 lg:space-y-0">
            <div class="flex w-full flex-col justify-start items-start">
                <div class="">
                    <p class="text-3xl lg:text-4xl dark:text-white font-semibold leading-7 lg:leading-9 text-gray-800">
                        Check out</p>
                </div>
                <div class="mt-2">
                    <a href="javascript:void(0)"
                       class="text-base dark:text-gray-400 leading-4 underline hover:text-gray-800 text-gray-600">{{__("back")}}</a>
                </div>
                <div class="mt-12">
                    <p class="text-xl font-semibold dark:text-white leading-5 text-gray-800">{{__("Shipping Details")}}</p>
                </div>
                <form class="w-full" method="POST" action="{{route('cart.order',app()->getLocale())}}">
                    @csrf
                    <div class="mt-8 flex flex-col justify-start items-start w-full space-y-8">

                        <input
                            class="px-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                            type="text" placeholder="{{__("Full name")}}" name="full_name"
                            value="{{old('full_name')}}"/>
                        @error('full_name')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <input
                            class="px-2 focus:outline-none  dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                            type="text" placeholder="{{__("Email")}}" name="email" value="{{old('email')}}"/>
                        @error('email')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <input
                            class="px-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                            type="number" placeholder="{{__("phone")}}" name="phone"/>
                        @error('phone')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                        <input type="hidden" name="country" placeholder="" value="MA">
                        <input
                            class="px-2 focus:outline-none dark:bg-transparent dark:text-gray-400 dark:placeholder-gray-400 focus:ring-2 focus:ring-gray-500 border-b border-gray-200 leading-4 text-base placeholder-gray-600 py-4 w-full"
                            type="text" placeholder="{{__("Address")}}" name="address1" value="{{old('address1')}}"/>
                        @error('address1')
                        <span class='text-danger'>{{$message}}</span>
                        @enderror
                    </div>
                    <button
                        type="submit"
                        class="focus:outline-none focus:ring-2 dark:bg-gray-800 dark:text-white focus:ring-gray-500 focus:ring-offset-2 mt-8 text-base font-medium focus:ring-2 focus:ring-ocus:ring-gray-800 leading-4 hover:bg-black py-4 w-full md:w-4/12 lg:w-full text-white bg-gray-800">
                        {{__("Process payment")}}
                    </button>
                </form>

                <div class="mt-4 flex justify-start items-center w-full">
                    <a href="javascript:void(0)"
                       class="text-base leading-4 dark:text-gray-400 hover:underline focus:outline-none focus:text-gray-500 hover:text-gray-800 text-gray-600">{{__("back")}}</a>
                </div>
            </div>

            <div class="flex flex-col justify-start items-start bg-gray-50 dark:bg-gray-800 w-full p-6 md:p-14">
                <div>
                    <h1 class="text-2xl  dark:text-white font-semibold leading-6 text-gray-800">{{__("Summary")}}</h1>
                </div>
                <div class="flex mt-7 flex-col items-end w-full space-y-6">
                    <div class="flex justify-between w-full items-center">
                        <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">{{__("Total items")}}</p>
                        <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">{{Helper::getAllProductFromCart()->sum('quantity')}}</p>
                    </div>
                    <div class="flex justify-between w-full items-center">
                        <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">{{__("Subtotal")}}</p>
                        <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">{{number_format(Helper::totalCartPrice(),2)}}
                            {{__("MAD")}}</p>
                    </div>
                    @if(session()->has('coupon'))
                        <div class="flex justify-between w-full items-center">
                            <p class="text-lg dark:text-gray-300 leading-4 text-gray-600">{{__("Coupon value")}}</p>
                            <p class="text-lg dark:text-gray-300 font-semibold leading-4 text-gray-600">{{number_format(Session::get('coupon')['value'],2)}}
                                {{__("MAD")}}</p>
                        </div>
                    @endif
                </div>
                <div class="flex justify-between w-full items-center mt-32">
                    <p class="text-xl dark:text-white font-semibold leading-4 text-gray-800">{{__("Total")}}</p>
                    @php
                        $total_amount=Helper::totalCartPrice();
                        if(session()->has('coupon')){
                            $total_amount=$total_amount-Session::get('coupon')['value'];

                        }
                    @endphp
                    @if(session()->has('coupon'))
                        <p class="text-lg dark:text-white font-semibold leading-4 text-gray-800">{{number_format($total_amount,2)}}
                            {{__("MAD")}}</p>
                    @else
                        <p class="text-lg dark:text-white font-semibold leading-4 text-gray-800">{{number_format($total_amount,2)}}
                            {{__("MAD")}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>


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
        function showMe(box) {
            var checkbox = document.getElementById('shipping').style.display;
            // alert(checkbox);
            var vis = 'none';
            if (checkbox == "none") {
                vis = 'block';
            }
            if (checkbox == "block") {
                vis = "none";
            }
            document.getElementById(box).style.display = vis;
        }
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
