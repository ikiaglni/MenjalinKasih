<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\beranda\BerandaController;
use App\Http\Controllers\produk\ProdukController;
use App\Http\Controllers\relawan\RelawanController;
use App\Http\Controllers\pm\PmController;
use App\Http\Controllers\donasi\DonasiController;
use App\Http\Controllers\masuk\MasukController;
use App\Http\Controllers\daftar\DaftarController;

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

Route::get('/', [BerandaController::class,'beranda']);
Route::get('/produk', [ProdukController::class,'produk']);
Route::get('/pm', [PmController::class,'pm']);
Route::get('/relawan', [RelawanController::class,'relawan']);
Route::get('/donasi', [DonasiController::class,'donasi']);
Route::get('/masuk', [MasukController::class,'masuk']);
Route::get('/daftar', [DaftarController::class,'daftar']);

