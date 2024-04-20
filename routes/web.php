<?php

use Illuminate\Http\Request;
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

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruit');
});

route::get('/about', function (){
    $nama = "muhamad rusydan";
    $jk   = "laki-laki";
    $pt   = "smk";
    $pekerjaan = "imam taraweh";
    return view('biodata',compact('nama', 'jk','pt', 'pekerjaan'));
});

route::get('/sample/{nama}',function (Request $request, $nama){
    $nama2 = $nama;
    return view('sample',compact('nama2'));
});
