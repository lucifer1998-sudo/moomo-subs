@extends('layouts.main')

@section('content')
<div class="my-20">
    <div class="flex justify-between">
        <div class="col"><h1 class="text-center font-bold text-2xl mb-14">Your Requests</h1></div>
        <div class="text-right">
            <a href="{{route('request.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Request
            </a>
        </div>
    </div>
    <!-- This example requires Tailwind CSS v2.0+ -->
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
              <th>
                Are we subbing?
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
                        {{ $request -> sub_status }}
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