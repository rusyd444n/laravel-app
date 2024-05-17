<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;

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
Route::get('film', function(){
    return view ('Film');
});

use App\Models\Film;

Route::get('film/{id}', function(int $id){
    return view('DetailFilm', ['film' => Film::findOrFail($id)]);
});
// route with controller
route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
route::get('Hewan',[MyController::class,'animals']);

// route movie
route::get('movie',[MovieController::class,'getMovie'])->middleware('auth');
route::get('movie/{id}',[MovieController::class,'getMovieById']);

//route artikel
route::get('artikel',[ArtikelController::class,'getArtikel']);
route::get('artikel/{id}',[ArtikelController::class,'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [App\Http\Controllers\ArtikelController::class, 'getArtikelByKategori']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route crudd

Route::resource('penulis',PenulisController::class);

Route::resource('genre',GenreController::class);

Route::resource('buku',BukuController::class);
