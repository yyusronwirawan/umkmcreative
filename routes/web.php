<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/desa_umkm', function () {
    return view('desa');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/tegalsari', function () {
    return view('tegalsari');
});

Route::get('/josari', function () {
    return view('josari');
});

Route::get('/kutuwetan', function () {
    return view('kutuwetan');
});

Route::get('/kontak', function () {
    return view('kontak');
});