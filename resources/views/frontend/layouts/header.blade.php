<header class="relative bg-white">

    <div class="max-w-full mx-auto  align-items-center" style="background-color: #Ff5641">
        <div class="md:flex">
            <div class="md:shrink-0 sm:w-full md-w-1/2 text-center justify-center py-2 md:py-5">
                <ul class="flex flex-row justify-center text-white">
                    <li class="mx-2 items-center sm:text-sm"><i class="ti-headphone-alt mr-1"></i> +060 (800)
                        801-582
                    </li>
                    <li class="mx-2 items-center sm:text-sm"><i class="ti-email mr-1"></i> eshop@gmail.com</li>
                    <li class="mx-2 items-center sm:text-sm text-gray-800">
                        <select name="" id="langs">
                            <option value="ar" {{app()->getLocale() === 'ar' ? 'selected' : ''}}>AR</option>
                            <option value="fr" {{app()->getLocale() === 'fr' ? 'selected' : ''}}>FR</option>
                            <option value="en" {{app()->getLocale() === 'en' ? 'selected' : ''}}>EN</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="md:shrink-0 sm:w-full md-w-1/2 text-center justify-center py-2 md:py-5">
                <ul class="flex flex-row justify-center text-white">
                    <li class="mx-2 items-center sm:text-sm"><i class="ti-location-pin mr-1"></i> <a
                            href="http://127.0.0.1:8000/product/track">{{__("Track Order")}}</a></li>
                    @auth
                        @if(Auth::user()->role=='admin')
                            <li class="mx-2 items-center sm:text-sm"><i class="ti-user mr-1"></i> <a
                                    href="{{route('admin')}}" target="_blank">{{__("Dashboard")}}</a></li>
                        @else
                            <li class="mx-2 items-center sm:text-sm"><i class="ti-user mr-1"></i> <a
                                    href="{{route('user')}}" target="_blank">{{__("Dashboard")}}</a></li>
                        @endif
                        <li class="mx-2 items-center sm:text-sm"><i class="ti-power-off  mr-1"></i> <a
                                href="{{route('user.logout')}}">{{__("Logout")}}</a></li>
                    @else
                        <li class="mx-2 items-center sm:text-sm">
                            <i class="ti-power-off mr-1"></i>
                            <a href="{{route('login.form')}}">{{__("Login")}}</a>
                            <span>-</span>
                            <a href="{{route('register.form')}}">{{__("Register")}}</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</header>
<nav id="header" class="w-full z-30 top-0 py-1">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-6 py-3">

        <label for="menu-toggle" class="cursor-pointer md:hidden block">
            <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                 viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle"/>

        <div class="order-1 md:order-1 md:w-1/3 justify-items-center">
            @php
                $setting=DB::table('settings')->first();
            @endphp
            <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl"
               href="{{route('home',app()->getLocale())}}">
                <img src="{{$setting->logo}}" alt="" class="w-16 h-16">
            </a>
        </div>

        <div
            class="hidden md:flex md:items-center md:w-auto w-full order-3 md:order-2 md:w-1/3 md:justify-center"
            id="menu">
            <nav>
                <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0 ">
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4 "
                           href="{{route('home',app()->getLocale())}}">{{__("home")}}</a></li>
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                           href="{{route('product-lists',app()->getLocale())}}">{{__("products")}}</a></li>
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                           href="{{route('about-us',app()->getLocale())}}">{{__("about")}} </a></li>
                    {{--                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"--}}
                    {{--                           href="{{route('blog')}}">Blog</a></li>--}}
                    <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
                           href="{{route('contact',app()->getLocale())}}">{{__("contact")}}</a></li>
                </ul>
            </nav>
        </div>

        <div class="order-2 md:order-3 flex items-center md:w-1/3 md:justify-center" id="nav-content">

            <a class="pl-3 inline-block no-underline hover:text-black" href="{{route('cart',app()->getLocale())}}">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24">
                    <path
                        d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z"/>
                    <circle cx="10.5" cy="18.5" r="1.5"/>
                    <circle cx="17.5" cy="18.5" r="1.5"/>
                </svg>
            </a>

        </div>
    </div>
</nav>

