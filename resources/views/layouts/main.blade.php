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
            <div class="owl-carousel owl-theme">
                <div class="h-full">
                    <img src="{{asset('/images/img-1.png')}}" class="w-full" alt="">
                    <div class="bg-white py-2 px-5 absolute w-full img-details bottom-0 rounded-3xl">
                        <h1 class="text-xl text-center font-bold">Lorem ipsum</h1>
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/img-2.png')}}" class="w-full" alt="">
                    <div class="bg-white py-2 px-5 absolute w-full img-details bottom-0 rounded-3xl">
                        <h1 class="text-xl text-center font-bold">Lorem ipsum</h1>
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/img-3.png')}}" class="w-full" alt="">
                    <div class="bg-white py-2 px-5 absolute w-full img-details bottom-0 rounded-3xl">
                        <h1 class="text-xl text-center font-bold">Lorem ipsum</h1>
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/img-1.png')}}" class="w-full" alt="">
                    <div class="bg-white py-2 px-5 absolute w-full img-details bottom-0 rounded-3xl">
                        <h1 class="text-xl text-center font-bold">Lorem ipsum</h1>
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/img-2.png')}}" class="w-full" alt="">
                    <div class="bg-white py-2 px-5 absolute w-full img-details bottom-0 rounded-3xl">
                        <h1 class="text-xl text-center font-bold">Lorem ipsum</h1>
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium</p>
                    </div>
                </div>
                <div>
                    <img src="{{asset('images/img-3.png')}}" class="w-full" alt="">
                    <div class="bg-white py-2 px-5 absolute w-full img-details bottom-0 rounded-3xl">
                        <h1 class="text-xl text-center font-bold">Lorem ipsum</h1>
                        <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium</p>
                    </div>
                </div>
            </div>
            <div class="my-20">
                <h1 class="text-center font-bold text-3xl mb-14">About Mamamoo</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-4  gap-5">
                    <div class="relative">
                        <img src="{{asset('images/img-3.png')}}" class="w-full about-imgs" alt="">
                        <div class="bg-white p-3 absolute bottom-0  md:text-sm lg:text:lg text-xs">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque accusamus debitis quaerat minus eius
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{asset('images/img-3.png')}}" class="w-full about-imgs" alt="">
                        <div class="bg-white p-3 absolute bottom-0 md:text-sm lg:text:lg text-xs">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque accusamus debitis quaerat minus eius
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{asset('images/img-3.png')}}" class="w-full about-imgs" alt="">
                        <div class="bg-white p-3 absolute bottom-0 md:text-sm lg:text:lg text-xs">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque accusamus debitis quaerat minus eius
                        </div>
                    </div>
                    <div class="relative">
                        <img src="{{asset('images/img-3.png')}}" class="w-full about-imgs" alt="">
                        <div class="bg-white p-3 absolute bottom-0 md:text-sm lg:text:lg text-xs">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque accusamus debitis quaerat minus eius
                        </div>
                    </div>
                </div>
                <h1 class="text-center font-bold text-3xl my-14">Achievements</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 relative">
                    <div class="grid grid-cols-1 gap-y-10 absolute -left-10">
                        <span class="md:text-2xl">2</span>
                        <span class="md:text-2xl">0</span>
                        <span class="md:text-2xl">2</span>
                        <span class="md:text-2xl">1</span>
                    </div>
                    <div>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Mamamoo continuous to defy conventional wisdom about K-Pop girl group peaks and logetivity <br>All Mamamoo albums ranked in the top 100 on the year-end Hanteo charts
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Moonbyul, Solar and Hwasa occupy the top 4 spots for the most albums sold by a female soloist in 2020
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Mamamoo sold 245, 438 albums as a group in 2020
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            164,167 copies of Travel were sold
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            100,000 copies of Travel were sold in a day! A Mamamoo record!
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Their pre-release single, Dingga, peaked at #7 on the Melon Daily Chart
                            Making Dingga their 10th Top 10 Hit Song. <br>
                            Which trails only Twice (12) for the most of any 3rd generation girl group <br>
                            With just one comeback as a group, Mamamoo still showed they haven't lost their status as digital monsters <br>
                            Mamamoo 2020 Gaon Digital Index Score: <br>
                            747,817,046 <br>
                            3rd highest behind only BlackPink and Oh My Girl

                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Their hit title track HIP was the only 3rd generation girl group song released in 2019 to chart for an entire year --373 days! <br>
                            6th most of any 3rd Gen girl group song!
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Moomoos have proven that we're one of the most united and loyal fandoms in K-Pop
                        </p>
                    </div>
                    <div>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Amazing album sales
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Streaming Records
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Solo dominance
                        </p>
                        <hr class="bg-black opacity-100 mb-5 text-xs md:text-sm lg:text:lg">
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Solo Promotions (Moonbyul) <br>
                            Moonbyul's debut album, Dark Side of The Moon released on February 14, 2020.
                        </p>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Moonbyul's records by a Female Solo Artist:
                        </p>
                        <ul class="custom-icon mb-5 text-xs md:text-sm lg:text:lg">
                            <li>
                                4th highest first day sales all-time on Hanteo (59,342 copies)
                            </li>
                            <li>
                                2nd highest first week sales on Hanteo (66,047 copies)
                            </li>
                            <li>
                                77,201 copies sold on Gaon
                            </li>
                            <li>
                                Her repackage album, Moon, sold 36,929 copies on Gaon
                            </li>
                            <li>
                                116,242 total albums sold on Gaon
                            </li>
                            <li>
                                Over 100,000 total albums sold on Hanteo
                            </li>
                            <li>
                                Moonbyul is the FIRST 3rd Generation Female Idol to sell over 100,000 albums on Hanteo
                            </li>
                            <li>
                                Moonbyul is the best selling female soloist of 2020
                            </li>
                            <li>
                                Solo Promotions (Solar)
                            </li>
                            <li>
                                Solar's debut album, Spit it Out released on April 23, 2020
                            </li>
                            
                        </ul>
                        <p class="mb-5 text-xs md:text-sm lg:text:lg">
                            Solar's records by a Female Solo Artist:
                        </p>
                    </div>

                </div>
            </div>
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