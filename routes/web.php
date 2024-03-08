<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;

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
    return view('app');
});

Route::get('/dashboard', [SuperAdminController::class, 'index']);

Route::get('/data_sampah', [SuperAdminController::class, 'data_sampah' ])->name('data_sampah');

Route::get('/data_admin', [SuperAdminController::class, 'data_admin' ])->name('data_admin');

Route::get('/data_nasabah', [SuperAdminController::class, 'data_nasabah' ])->name('data_nasabah');

Route::get('/transaksi_beli', [SuperAdminController::class, 'transaksi_beli' ])->name('transaksi_beli');

Route::get('/tambah_sampah', [SuperAdminController::class,'tambah_sampah']);

Route::get('/cari_sampah', [SuperAdminController::class,'cari_sampah']);
