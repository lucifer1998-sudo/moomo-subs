@extends('layouts.app')
@section('content')
<div class="mx-40">
<div class="row">
  <div class="col"><div class="p-3"><p class="h2">Requests</p></div></div>
  <div class="col"><div class="p-3 text-right"><a href="{{route('admin.request.create')}}" class="btn btn-dark">Add Request</a></div></div>
</div>
<table class="table table-borderless mt-2 ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Request Title</th>
      <th scope="col">Request Link</th>
      <th scope="col">Are We Subbing?</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($requests as $key => $request)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$request -> title}}</td>
                <td>{{$request -> link}}</td>
                <td>{{$request -> sub_status}}</td>
            </tr>
        @endforeach
  </tbody>
</table>
</div>
@endsection