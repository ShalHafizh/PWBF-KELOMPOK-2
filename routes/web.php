<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ControllerPWBF2;
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

Route::get('/', [LoginController::class, 'login']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/beranda', [ControllerPWBF2::class, 'beranda']);

Route::get('/produk', [ControllerPWBF2::class, 'produk']);

Route::get('/about', [ControllerPWBF2::class, 'about']);

Route::get('/contact', [ControllerPWBF2::class, 'contact']);

