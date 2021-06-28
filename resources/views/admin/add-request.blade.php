@extends('layouts.main')

@section('content')
    <div class="w-full max-w-xl m-auto">
        <form method="post" action="{{ route('admin.request.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 m-8">
            @csrf
            <div class="text-center">
                <p class="text-2xl font-lato ">Add Requests</p>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                   Request Title
                </label>
                <input name="title" class="shadow appearance-none border rounded w-full
                py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text"
                       placeholder="Request Title" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                   Request Link
                </label>
                <input name="link" class="shadow appearance-none border border-red-500 rounded w-full
                 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                       type="text" placeholder="Request Link" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Are we subbing?
                </label>
                <select name="sub" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
                text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Album Link">
                    <option value="maybe">Maybe</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
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
