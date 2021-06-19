@extends('layouts.app')

@section('content')
    <main class="mb-auto ">
        <div class="carousel relative mt-10  bg-base">
            <div class="carousel-inner relative overflow-hidden w-full">
                <!--Slide 1-->
                <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                       checked="checked">
                <div class="carousel-item absolute opacity-0" style="height:auto;">
                    <div class="flex">
                        <div class="flex flex-wrap -mx-1 lg:-mx-4">
                            <div class="my-1 w-full p-20 md:w-1/2 lg:my-4 lg:w-1/3 ">
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <a href="#">
                                        <img alt="Placeholder" class="block h-auto w-full"
                                             src="https://picsum.photos/600/400/?random">
                                    </a>

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black" href="#">
                                                Article Title
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            <img alt="Placeholder" class="block rounded-full"
                                                 src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                Author Name
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>
                            </div>
                            <div class="my-1 w-full p-20 md:w-1/2 lg:my-4 lg:w-1/3">
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <a href="#">
                                        <img alt="Placeholder" class="block h-auto w-full"
                                             src="https://picsum.photos/600/400/?random">
                                    </a>

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black" href="#">
                                                Article Title
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            <img alt="Placeholder" class="block rounded-full"
                                                 src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                Author Name
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>
                            </div>
                            <div class="my-1 w-full p-20 md:w-1/2 lg:my-4 lg:w-1/3">
                                <article class="overflow-hidden rounded-lg shadow-lg">

                                    <a href="#">
                                        <img alt="Placeholder" class="block h-auto w-full"
                                             src="https://picsum.photos/600/400/?random">
                                    </a>

                                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                        <h1 class="text-lg">
                                            <a class="no-underline hover:underline text-black" href="#">
                                                Article Title
                                            </a>
                                        </h1>
                                        <p class="text-grey-darker text-sm">
                                            11/1/19
                                        </p>
                                    </header>

                                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                                            <img alt="Placeholder" class="block rounded-full"
                                                 src="https://picsum.photos/32/32/?random">
                                            <p class="ml-2 text-sm">
                                                Author Name
                                            </p>
                                        </a>
                                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                                            <span class="hidden">Like</span>
                                            <i class="fa fa-heart"></i>
                                        </a>
                                    </footer>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="carousel-3"
                       class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-2"
                       class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">Slide 2</div>
                </div>
                <label for="carousel-1"
                       class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-3"
                       class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                <div class="carousel-item absolute opacity-0" style="height:50vh;">
                    <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3</div>
                </div>
                <label for="carousel-2"
                       class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                <label for="carousel-1"
                       class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                <ol class="carousel-indicators">
                    <li class="inline-block mr-3">
                        <label for="carousel-1"
                               class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-2"
                               class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                    <li class="inline-block mr-3">
                        <label for="carousel-3"
                               class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <h2 class="text-center font-lato text-4xl font-semibold">About Mamaamo</h2>
        <div class="flex m-8">
            <div class="flex flex-wrap -mx-1 lg:-mx-4 p-10">
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full"
                             src="https://picsum.photos/600/400/?random">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                Article Title
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            11/1/19
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full"
                                 src="https://picsum.photos/32/32/?random">
                            <p class="ml-2 text-sm">
                                Author Name
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
            </div>
            <div class="flex flex-wrap -mx-1 lg:-mx-4 p-10">
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full"
                             src="https://picsum.photos/600/400/?random">
                    </a>

                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                Article Title
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            11/1/19
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full"
                                 src="https://picsum.photos/32/32/?random">
                            <p class="ml-2 text-sm">
                                Author Name
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
            </div>
            <div class="flex flex-wrap -mx-1 lg:-mx-4 p-10">
                <article class="overflow-hidden rounded-lg shadow-lg">

                    <a href="#">
                        <img alt="Placeholder" class="block h-auto w-full"
                             src="https://picsum.photos/600/400/?random">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black" href="#">
                                Article Title
                            </a>
                        </h1>
                        <p class="text-grey-darker text-sm">
                            11/1/19
                        </p>
                    </header>

                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        <a class="flex items-center no-underline hover:underline text-black" href="#">
                            <img alt="Placeholder" class="block rounded-full"
                                 src="https://picsum.photos/32/32/?random">
                            <p class="ml-2 text-sm">
                                Author Name
                            </p>
                        </a>
                        <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        </a>
                    </footer>

                </article>
            </div>
        </div>
    </main>
@endsection
