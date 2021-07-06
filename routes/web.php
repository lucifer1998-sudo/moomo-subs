<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

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
    Route::get('/request/edit/{id}',[AdminController::class,'editRequest']) -> name('admin.request.edit');
    Route::post('/request/update/{id}',[AdminController::class,'updateRequest']) -> name('admin.request.update');
    Route::get('/videos/create',[AdminController::class,'addVideos']) -> name('admin.videos.create');
    Route::get('/albums/create',[AdminController::class,'addAlbums']) -> name('admin.albums.create');
    Route::get('/request/del/{id}',[AdminController::class,'deleteRequest'])->name('admin.request.delete');
    Route::post('/video',[AdminController::class,'saveVideos']) -> name('admin.videos.store');
    Route::get('/video/del/{id}',[AdminController::class,'deleteVideo'])->name('admin.video.delete');
    Route::post('/album',[AdminController::class,'saveAlbums']) -> name('admin.albums.store');
    Route::get('/album/details/{id}',[AdminController::class,'albumDetails']) -> name('admin.album.details');
    Route::get('/{album}/video/delete/{id}',[AdminController::class,'deleteAlbumVideo'])->name('admin.album.video.delete');
    Route::get('/music-index',[AdminController::class,'musicIndex'])->name('admin.music-index');
    Route::get('/music-index/create',[AdminController::class,'musicIndexCreate'])->name('admin.music-index.create');
    Route::post('/music-index',[AdminController::class,'musicIndexStore'])->name('admin.music-index.store');
    Route::get('/music-index/details/{id}',[AdminController::class,'musicIndexDetails'])->name('admin.music-index.detail');
});
Route::get('/request',[IndexController::class,'requestIndex']) -> name('request.index');
Route::get('/request/create',[IndexController::class,'addRequest']) -> name('request.create');
Route::post('/request',[IndexController::class,'saveAddRequest']) -> name('request.store');
Route::get('/albums',[IndexController::class,'albums'])->name('albums.index');
Route::get('/album/{id}/videos',[IndexController::class,'albumVideos'])->name('album.videos');

require __DIR__.'/auth.php';
