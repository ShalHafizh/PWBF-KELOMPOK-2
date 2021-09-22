<?php

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
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/about', function () {
    return  view('about');
});

Route::get('/contact', function () {
    return view('contact', [
        "nama1" => "1. Muhammad Faishal Hafizh Mumtaz Galip (152011513002)",
        "nama2" => "2. Fariz Rahman (152011513028)",
        "image1" => "Ishal.jpg",
        "image2" => "Tower.jpg"
    ]);
});