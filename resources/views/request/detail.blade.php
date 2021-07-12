@extends('layouts.main')
@section('content')
    <div class="flex mt-10">
        <iframe src="{{ $request -> embed_yt }}" frameborder="0" height="400px" class="w-full" onload="resizeIframe(this)"></iframe>
    </div>
    <div class="text-center my-10">
        @if (isset($request -> yt))
            <a class="text-center font-bold text-2xl mb-14 req-title" href="{{$request -> yt}}" target="_blank">Youtube</a>
            |
        @endif
        @if(isset($request->dm))
            <a class="text-center font-bold text-2xl mb-14 req-title" href="{{$request -> dm}}" target="_blank">Dailymotion</a>
            |
        @endif
        @if(isset($request->gd))
            <a class="text-center font-bold text-2xl mb-14 req-title" href="{{$request -> gd}}" target="_blank">Google Drive</a>
            |
        @endif
        @if(isset($request->other_1))
            <a class="text-center font-bold text-2xl mb-14 req-title" href="{{$request -> other_1}}" target="_blank">Other</a>
            |
        @endif
        @if(isset($request->other_2))
            <a class="text-center font-bold text-2xl mb-14 req-title" href="{{$request -> other_2}}" target="_blank">Other</a>
        @endif
    </div>
@endsection