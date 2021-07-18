@extends('layouts.main')
@section('content')
<div class="mx-2">
    <div class="flex justify-between">
        <div class="col"><h1 class="text-center font-bold text-2xl mb-14 heading-1">Series</h1></div>
        <div class="text-right">
            <a href="{{route('admin.series.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Add Series
            </a>
        </div>
    </div>
    <div class="mt-5 mb-20">
            <div class="grid grid-cols-1 sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-3  gap-5">
                @foreach ($series as $serie)
                    <div class="relative">
                        <a href="{{route('admin.series.details',['id'=>$serie->id])}}">
                        <img src="\uploads\{{$serie->image}}" class="w-full about-imgs" alt="">
                        <div class="bg-white w-full text-center font-bold p-3 absolute bottom-0  md:text-sm lg:text:lg text-xs">
                            {{ $serie -> title }}
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div> 
</div>
@endsection