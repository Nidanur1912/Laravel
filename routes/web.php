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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('auth');

Route::resource('obat', \App\Http\Controllers\ObatController::class)->middleware('auth');

Route::get('/exportpdf', [App\Http\Controllers\ObatController::class, 'exportpdf'])->name('exportpdf');
Route::get('/exportpdf1', [App\Http\Controllers\PembelianController::class, 'exportpdf1'])->name('exportpdf1');
Route::get('/exportpdf2', [App\Http\Controllers\PenjualanController::class, 'exportpdf2'])->name('exportpdf2');
Route::get('/exportpdf3', [App\Http\Controllers\DetailPembelianController::class, 'exportpdf3'])->name('exportpdf3');
Route::get('/exportpdf4', [App\Http\Controllers\DetailPenjualanController::class, 'exportpdf4'])->name('exportpdf4');

Route::resource('distributor', \App\Http\Controllers\DistributorController::class)->middleware('auth');

Route::resource('pembelian', \App\Http\Controllers\PembelianController::class)->middleware('auth');

Route::resource('penjualan', \App\Http\Controllers\PenjualanController::class)->middleware('auth');

Route::resource('detail_pembelian', \App\Http\Controllers\DetailPembelianController::class)->middleware('auth');

Route::resource('detail_penjualan', \App\Http\Controllers\DetailPenjualanController::class)->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
