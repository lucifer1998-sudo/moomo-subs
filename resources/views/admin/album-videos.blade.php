@extends('layouts.main')
@section('content')
<div class="mx-40">
<div class="flex justify-center">
        <div class="col"><h1 class="text-center font-bold text-2xl mb-14 heading-1">{{$album-> title ?? 'Album'}}</h1></div>
    </div>
<div class="flex flex-col mb-20">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Link
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" >
                                Action
                            </th>
                            
                            </tr>
                        </thead>
                        <tbody class=" divide-y divide-gray-200">
                                @foreach ($album -> videos as $key => $video)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap font-bold">
                                        {{$key + 1}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $video -> title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                        {{ $video -> link }}
                                    </td>
                                    @if (auth()->user()->isSuperAdmin())
                                      <td><a href="{{route('admin.album.video.delete',['id'=>$video->id,'album'=>$album->id])}}"><i class="fa fa-trash" title="delete"></i></a></td>
                                    @endif
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
