@extends('layouts.app')
@section('content')
    <div class="mx-40">
        <div class="row">
            <div class="col"><div class="p-3"><p class="h2">Albums</p></div></div>
            <div class="col"><div class="p-3 text-right"><a href="{{route('admin.albums.create')}}" class="btn btn-dark">Add Albums</a></div></div>
        </div>
        <div class="grid grid-cols-3 m-8">
            @foreach($albums as $key => $album)
                <div class=" -mx-1 lg:-mx-4 p-10">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <a href="#">
                            <img alt="Placeholder" class="block h-auto w-full"
                                src="\uploads\{{$album->image}}">
                        </a>
                        <header class="flex items-center justify-center my-2 leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <a class="no-underline hover:underline text-black" href="#">
                                    Article Title
                                </a>
                            </h1>
                        </header>

                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection
