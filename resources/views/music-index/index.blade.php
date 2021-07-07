@extends('layouts.main')
@section('content')
    <div class="mx-40">
        <div class="flex justify-center">
            <div class="col"><h1 class="text-center font-bold text-2xl mb-14 heading-1">Music Index</h1></div>
        </div>
        <div class="grid grid-cols-3 mt-2 mb-8 mx-4">
            @foreach($musicIndexes as $key => $music)
                <div class=" -mx-1 lg:-mx-4 p-2">
                    <article class="overflow-hidden rounded-lg shadow-lg">
                        <div class="h-40 flex justify-center items-center">
                            <a href="{{route('admin.music-index.detail',['id'=>$music ->id])}}">
                                <!-- <img alt="Placeholder" class="block object-scale-down w-full"
                                    src="\uploads\{{$music->image}}"> -->
                                    <span class="text-center text-3xl font-bold" style="color:#FF6D6D;font-family:cursive">
                                        {{ $music -> year }}
                                    </span>
                            </a>
                        </div>
                        <!-- <header class="flex items-center justify-center my-2 leading-tight p-2 md:p-4">
                            <h1 class="text-lg">
                                <span class="no-underline hover:underline text-black" >
                                    {{$music -> year}}
                                </span>
                            </h1>
                        </header> -->
                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection