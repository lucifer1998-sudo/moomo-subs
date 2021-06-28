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
                <a href="" class="px-2 mx-5">Albums</a>
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

        </ul>

        <div>
            <a class="rounded-lg bg-white py-1 px-2 mr-2 inline-block  " href=""><i class="fa fa-search"></i></a>
            <a class="rounded-full py-1 md:px-6 px-3 lg:text-lg md:text-sm text-sm border border-black hover:bg-black hover:text-white transition duration-150 inline-block "
                href="">Login</a>
            <a class="rounded-full py-1 md:px-6 px-3 lg:text-lg md:text-sm text-sm bg-black border border-black text-white hover:bg-transparent  hover:text-black transition duration-150 inline-block "
                href="">Sign up</a>
        </div>
    </nav>

    <main>
        <div class="container m-auto mt-20 px-5 md:px-0">
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
    </script>

</body>

</html>