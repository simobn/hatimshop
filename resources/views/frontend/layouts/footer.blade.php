<div class="pt-12">
    <footer id="footer" class="relative z-50 dark:bg-gray-900">
        <div tabindex="0" aria-label="footer"
             class="focus:outline-none border-t border-b border-gray-200 dark:border-gray-700 py-16">
            <div class="mx-auto container px-4 xl:px-12 2xl:px-4">
                <div class="lg:flex">
                    <div class="w-full lg:w-1/2 mb-16 lg:mb-0 flex">
                        <div class="w-full lg:w-1/2 px-6">
                            <ul>
                                <li>
                                    <p class="font-bold focus:outline-none focus:underline  text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50"
                                    >About HatimShop</p></li>
                                @php
                                    $setting=DB::table('settings')->first();
                                @endphp
                                <li class="mt-6"><p
                                        class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50"
                                    >{!! $setting->short_des !!}</p></li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-1/2 px-6">
                            <ul>
                                <li>
                                    <a class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50"
                                       href="javascript:void(0)">Free components</a></li>
                                <li class="mt-6"><a
                                        class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50"
                                        href="javascript:void(0)">Blog</a></li>
                                <li class="mt-6"><a
                                        class="focus:outline-none focus:underline text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50"
                                        href="javascript:void(0)">Changelog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 flex">
                        <div class="w-full lg:w-1/2 px-6">
                            <ul>
                                <li><a href="javascript:void(0)"
                                       class="focus:underline focus:outline-none text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50">Privacy
                                        policy</a></li>
                                <li class="mt-6"><a
                                        class="focus:underline focus:outline-none text-xs lg:text-sm leading-none hover:text-brand dark:hover:text-brand text-gray-800 dark:text-gray-50"
                                        href="javascript:void(0)">Terms of service</a></li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-1/2 px-6 flex flex-col justify-between">
                            <div class="flex items-center mb-6">
                                <a aria-label="Github" href="javascript:void(0)">
                                    <div
                                        class="text-gray-800 dark:text-gray-50 cursor-pointer hover:text-brand dark:hover:text-brand">
                                        <img class="dark:hidden"
                                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg1.svg"
                                             alt="Github">
                                        <img class="dark:block hidden"
                                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg1dark.svg"
                                             alt="Github">
                                    </div>
                                </a
                                ><a aria-label="Twitter" href="javascript:void(0)" class="ml-4">
                                    <div class="">
                                        <img class="dark:hidden"
                                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg2.svg"
                                             alt="Twitter">
                                        <img class="dark:block hidden"
                                             src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_1-svg2dark.svg"
                                             alt="Twitter">
                                    </div>
                                </a>
                            </div>
                            <div class="relative w-36">
                                <img id="auto"
                                     class="dark:block hidden absolute inset-0 m-auto ml-3 text-gray-700 dark:text-gray-50 icon icon-tabler icon-tabler-device-laptop"
                                     src="../svgs/svg3dasvg5dark.svg" alt="auto">
                                <img id="light"
                                     class="dark:hidden hidden absolute inset-0 m-auto ml-3 text-gray-700 dark:text-gray-50 icon icon-tabler icon-tabler-brightness-up"
                                     src="../svgs/svg4.svg" alt="light">
                                <img id="light"
                                     class="dark:block hidden hidden absolute inset-0 m-auto ml-3 text-gray-700 dark:text-gray-50 icon icon-tabler icon-tabler-brightness-up"
                                     src="../svgs/svg4dasvg5dark.svg" alt="light">
                                <img id="dark"
                                     class="dark:hidden hidden absolute inset-0 m-auto ml-3 text-gray-700 dark:text-gray-50 icon icon-tabler icon-tabler-moon"
                                     src="../svgs/svg5.svg" alt="dark">
                                <img id="dark"
                                     class="dark:block hidden hidden absolute inset-0 m-auto ml-3 text-gray-700 dark:text-gray-50 icon icon-tabler icon-tabler-moon"
                                     src="../svgs/svg5dark.svg" alt="dark">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-16 flex flex-col justify-center items-center">
            <a class="focus:outline-none" tabindex="0" role="link" aria-label="home link" href="javascript:void(0)"
            >
                <img class="dark:hidden w-16 h-16" src="{{$setting->logo}}"
                     alt="tuk logo">
            </a>
            <p tabindex="0"
               class="focus:outline-none mt-6 text-xs lg:text-sm leading-none text-gray-900 dark:text-gray-50"> {{date('Y')}}
                HatimShop. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->


@stack('scripts')

