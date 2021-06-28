<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $requests = \App\Models\Request::take(3)-> orderBy('id','desc')->get();
    return view('welcome' , compact('requests'));
});
Route::get('/test', function () {
    return view('layouts.dashboard');
});
Route::get('/dashboard', function () {
    $requests = \App\Models\Request::take(3)-> orderBy('id','desc')->get();
    return view('welcome' , compact('requests'));
})->middleware(['auth'])->name('dashboard');

//Admin Routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/',[AdminController::class,'index']);
    Route::get('/requests',[AdminController::class,'requestsListing'])->name('admin.request.index');
    Route::get('/videos',[AdminController::class,'videosListing'])->name('admin.videos.index');
    Route::get('/albums',[AdminController::class,'albumsListing'])->name('admin.albums.index');
    Route::get('/request/create',[AdminController::class,'addRequest']) -> name('admin.request.create');
    Route::get('/videos/create',[AdminController::class,'addVideos']) -> name('admin.videos.create');
    Route::get('/albums/create',[AdminController::class,'addAlbums']) -> name('admin.albums.create');
    Route::post('/request',[AdminController::class,'saveAddRequest']) -> name('admin.request.store');
    Route::get('/request/del/{id}',[AdminController::class,'deleteRequest'])->name('admin.request.delete');
    Route::post('/video',[AdminController::class,'saveVideos']) -> name('admin.videos.store');
    Route::get('/video/del/{id}',[AdminController::class,'deleteVideo'])->name('admin.video.delete');
    Route::post('/album',[AdminController::class,'saveAlbums']) -> name('admin.albums.store');
    Route::get('/album/details/{id}',[AdminController::class,'albumDetails']) -> name('admin.album.details');
    Route::get('/{album}/video/delete/{id}',[AdminController::class,'deleteAlbumVideo'])->name('admin.album.video.delete');
});


require __DIR__.'/auth.php';
