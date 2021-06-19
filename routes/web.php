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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index']);
    Route::get('/request/create',[AdminController::class,'addRequest']) -> name('admin.request.create');
    Route::get('/videos/create',[AdminController::class,'addVideos']) -> name('admin.videos.create');
    Route::get('/albums/create',[AdminController::class,'addAlbums']) -> name('admin.albums.create');
});


require __DIR__.'/auth.php';
