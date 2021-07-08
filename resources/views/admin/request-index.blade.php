@extends('layouts.main')
@section('content')
<div class="mx-30 mb-10">
    <div class="flex justify-center">
        <h1 class="text-center font-bold text-2xl mb-14 heading-1">Your Requests</h1> 
    </div>

    <div class="flex flex-col">
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
                                Requested By
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" >
                                Are we subbing?
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" >
                                Created At
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" >
                                Action
                            </th>
                            </tr>
                        </thead>
                        <tbody class=" divide-y divide-gray-200">
                                @foreach ($requests as $key => $request)
                                    <tr>
                                    <td class="px-6 py-4 whitespace-nowrap font-bold">
                                        {{$key + 1}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $request -> title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                        {{ $request -> link }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                        {{ $request -> user -> email ?? 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                        {{ $request -> sub_status }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap ">
                                        {{ $request -> created_at }}
                                    </td>
                                    @if (auth()->user()->isSuperAdmin())
                                        <td>
                                            <div class="flex">
                                                <div class="px-1">
                                                    <a href="{{route('admin.request.edit',['id'=>$request->id])}}">
                                                        <i class="fa fa-edit" title="Edit"></i>
                                                    </a>
                                                </div>
                                                <div class="px-2">
                                                <a href="{{route('admin.request.delete',['id'=>$request->id])}}">
                                                    <i class="fa fa-trash" title="Delete"></i>
                                                </a>
                                                </div>
                                            </div>
                                        </td>
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