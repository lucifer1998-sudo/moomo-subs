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

Route::get('/dashboard', function () {
    $requests = \App\Models\Request::take(3)-> orderBy('id','desc')->get();
    return view('welcome' , compact('requests'));
})->middleware(['auth'])->name('dashboard');

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index']);
    Route::get('/request/create',[AdminController::class,'addRequest']) -> name('admin.request.create');
    Route::get('/videos/create',[AdminController::class,'addVideos']) -> name('admin.videos.create');
    Route::get('/albums/create',[AdminController::class,'addAlbums']) -> name('admin.albums.create');
    Route::post('/request',[AdminController::class,'saveAddRequest']) -> name('admin.request.store');
    Route::post('/video',[AdminController::class,'saveVideos']) -> name('admin.videos.store');
    Route::post('/album',[AdminController::class,'saveAlbums']) -> name('admin.albums.store');
});


require __DIR__.'/auth.php';
