<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/my-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
    <title>Document</title>
</head>

<body class="bg-pink-100">
    <nav class="px-5 flex justify-between align-middle  pt-5">
        <div class="flex justify-items-center items-center lg:hidden">
            <i id="hamburger-btn" class="fa fa-bars "></i>
        </div>
        <h1 class="text-3xl lg:text-5xl font-bold">LOGO</h1>
        <ul class="flex justify-center nav-list bg-pink-100">
            <li class="">
                <a href="" class="px-2 mx-5">Home</a>
            </li>
            <li class="">
                <a href="{{route('albums.index')}}" class="px-2 mx-5">Albums</a>
            </li>
            <li class="">
                <a href="" class="px-2 mx-5">Music Index</a>
            </li>
            <li class="">
                <a href="" class="px-2 mx-5">Series</a>
            </li>
            <li class="">
                <a href="" class="px-2 mx-5">Fancams</a>
            </li>
            @if (auth()->user() && auth() -> user() -> isSimpleUser())
            <li class="">
                <a href="{{ route('request.index') }}" class="px-2 mx-5">Requests</a>
            </li>
            @endif
            @if ( auth() -> user() && ( auth() -> user() -> isAdmin() || auth() -> user() -> isSuperAdmin() ) )
                <li class="">
                    <div class="dropdown inline-block relative">
                        <a class="inline-flex items-center">
                            <span class="mr-1">Admin</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1 z-10">
                            <li class="">
                                <a href="{{ route('admin.request.index') }}"
                                    class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                    Requests
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.videos.index') }}"
                                    class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                    Videos
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('admin.albums.index') }}"
                                    class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">
                                    Albums
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif

        </ul>

        <div>
            <a class="rounded-lg bg-white py-1 px-2 mr-2 inline-block  " href=""><i class="fa fa-search"></i></a>
            @if (Route::has('login'))
                @auth
                    @if ( Auth::user() )
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="rounded-full py-1 md:px-6 px-3 lg:text-lg 
                            md:text-sm text-sm bg-black border border-black text-white hover:bg-transparent  
                            hover:text-black transition duration-150 inline-block "
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                Log Out
                            </a>
                            <!-- <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link> -->
                        </form>
                    @endif
                @else
                    <a class="rounded-full py-1 md:px-6 px-3 lg:text-lg md:text-sm text-sm border border-black hover:bg-black hover:text-white transition duration-150 inline-block "
                    href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a class="rounded-full py-1 md:px-6 px-3 lg:text-lg md:text-sm text-sm bg-black border border-black text-white hover:bg-transparent  hover:text-black transition duration-150 inline-block "
                            href="{{ route('register') }}">Sign up</a>
                    @endif
                @endauth
            @endif
            
        </div>
    </nav>

    <main>
        <div class="container m-auto mt-20 px-5 md:px-0">
            @if (session('success'))
                <div class="bg-green-500 p-2 m-4 border border-red-400 text-red-700 px-4 py-3 rounded relative success-alert" role="alert">
                    <span class="block sm:inline text-white text-lg font-lato">{{ session('success') }}</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="hideAlert(this)">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
            @endif
            @yield('content')
        </div>
        <footer class="bg-black py-10 text-center">
            <a href="" class="text-white md:mx-5 sm:inline-block block mb-4 md:mb-0 md:w-auto mx-auto w-6/12  ">About Us <hr class="w-9/12 m-auto bg-pink-200"></a>
            <a href="" class="text-white md:mx-5 sm:inline-block block mb-4 md:mb-0 md:w-auto mx-auto w-6/12" >Get in Touch <hr class="w-9/12 m-auto bg-pink-200"></a>
            <a href="" class="inline-block mx-5 rounded-full px-4 py-1 bg-pink-200 mb-0">Fanbase</a>
        </footer>
    </main>


    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/my-js.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots:true,
            margin: 55,
            responsive: {
                0: {
                    items: 1
                },
                768:{
                    items:2
                },
                992: {
                    items: 3
                },
                // 1400:{
                //     items: 4
                // }

            }
        })
        function hideAlert(e){
            $('.success-alert').hide();
        }
    </script>

</body>

</html>