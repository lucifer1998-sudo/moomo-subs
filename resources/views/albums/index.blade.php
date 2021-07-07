@extends('layouts.main')

@section('content')
<div class="my-20">
    <h1 class="text-center font-bold text-3xl mb-14 heading-1">Albums</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-4  gap-5">
        @foreach ($albums as $album)
            <div class="relative">
                <a href="{{route('album.videos',['id'=>$album->id])}}">
                <img src="\uploads\{{$album->image}}" class="w-full about-imgs" alt="">
                <div class="bg-white w-full text-center font-bold p-3 absolute bottom-0  md:text-sm lg:text:lg text-xs">
                     {{ $album -> title }}
                </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection