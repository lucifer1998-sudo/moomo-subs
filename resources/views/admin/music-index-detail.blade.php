@extends('layouts.main')
@section('content')
<div class="mx-40">
    <div class="flex justify-center">
        <div class="col"><h1 class="text-center font-bold text-2xl mb-14" style="color:#FF6D6D;font-family:cursive">{{$music_index->year}}</h1></div>
        
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
                    </tr>
                </thead>
                <tbody class=" divide-y divide-gray-200">
                        @foreach ($music_index->videos as $key => $video)
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