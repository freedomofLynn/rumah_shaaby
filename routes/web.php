<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\TransaksiController;
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




// Route::resource('/', BarangController::class);
Route::resource('/', HomeController::class);

Route::resource('/barang', BarangController::class);

Route::resource('/transaksi', TransaksiController::class);

Route::resource('/login', LoginController::class);

Route::resource('/register', RegisterController::class);

Route::resource('/forgot', ForgotPasswordController::class);

Route::resource('/reset', ResetPasswordController::class);

