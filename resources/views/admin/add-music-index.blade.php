@extends('layouts.main')

@section('content')
    <div class="w-full max-w-xl m-auto">
        <form method="post" action="{{ route('admin.music-index.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-8">
            @csrf
            <div class="text-center">
                <p class="text-2xl font-lato ">Add Music Index</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                   Music Index Year
                </label>
                <input name="year" class="shadow appearance-none border border-red-500 rounded w-full
                 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                       type="text" placeholder="Music Index Year" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Videos
                </label>
                <select name="videos[]" class="shadow appearance-none border border-red-500 
                rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" multiple>
                    @foreach ($videos as $video)
                        <option value="{{$video->id}}">{{$video->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
