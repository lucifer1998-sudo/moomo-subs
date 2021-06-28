@extends('layouts.main')
@section('content')
<div class="mx-40">
<div class="row">
  <div class="col"><div class="p-3"><p class="h2">Videos</p></div></div>
  <div class="col"><div class="p-3 text-right"><a href="{{route('admin.videos.create')}}" class="btn btn-dark">Add Videos</a></div></div>
</div>
<table class="table table-borderless mt-2 ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Video Title</th>
      <th scope="col">Video Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($videos as $key => $video)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td class="w-2/5">{{$video -> title}}</td>
                <td class="w-2/5">{{$video -> link}}</td>
                @if (auth()->user()->isSuperAdmin())
                  <td><a href="{{route('admin.video.delete',['id'=>$video->id])}}"><i class="fa fa-trash" title="delete"></i></a></td>
                @endif
            </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection