@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach( $requests as $key => $request)
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="@if ($key == 0) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($requests as $key => $request)
                <div class="carousel-item @if ($key == 0) active @endif">
                    {{--                    <img class="d-block w-100" src="..." alt="First slide">--}}
                    <iframe class="px-20 py-5 mb-8 d-block w-100" width="100%" height="515"
                            src="{{ $request -> link }}">
                    </iframe>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
@endsection
