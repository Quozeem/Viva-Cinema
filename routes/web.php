<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinemasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/getmoviestime/{movies_time_id}', [CinemasController::class, 'getmoviestime']);
Route::Post('/cinema_location', [CinemasController::class, 'cinema_location']);
Route::get('/addMovies', [CinemasController::class, 'addMovies']);
Route::post('/addtime', [CinemasController::class, 'insert_timeMovies'])->name('insert_timeMovies');
Route::get('/getmovieslist/{cinema_location_id}', [CinemasController::class, 'getmovieslist']);
Route::get('/addTime', [CinemasController::class, 'admin_addTime_cinema']);
Route::post('/admin', [CinemasController::class, 'admin_categories_cinema'])->name('insert-movies');
Route::get('/', [CinemasController::class, 'cinemasCategories']);
Route::get('/admin', [CinemasController::class, 'adminCategories']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
