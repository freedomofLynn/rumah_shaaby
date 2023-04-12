<?php
namespace App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ReportController;
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
// Route::resource('/', HomeController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);
Route::resource('/barang', BarangController::class);
Route::middleware(['auth'])->group(function () {

    Route::post('/barang/import', [BarangController::class, 'import_barang'])->name('barang.import');
    Route::resource('/report', ReportController::class);
    Route::resource('/transaksi', TransaksiController::class);
});


// Route::resource('/forgot', ForgotPasswordController::class);
// Route::resource('/reset', ResetPasswordController::class);



