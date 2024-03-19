<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LurahController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;

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

Route::get('/home', function () {
    return redirect('/index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/index', [SesiController::class, 'index'])->name('index');
    Route::post('/index', [SesiController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/superAdmin', [SuperAdminController::class, 'index'])->name('dashboard');
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/user', [UserController::class, 'index'])->name('dashboard');
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});



Route::get('/data_sampah', [SuperAdminController::class, 'data_sampah'])->name('data_sampah');

Route::get('/data_admin', [SuperAdminController::class, 'data_admin'])->name('data_admin');

Route::get('/data_nasabah', [SuperAdminController::class, 'data_nasabah'])->name('data_nasabah');

Route::get('/transaksi_beli', [SuperAdminController::class, 'transaksi_beli'])->name('transaksi_beli');

Route::get('/transaksi_jual', [SuperAdminController::class, 'transaksi_jual'])->name('transaksi_jual');

Route::get('/laporan_jual', [SuperAdminController::class, 'laporan_jual'])->name('laporan_jual');

Route::get('/laporan_beli', [SuperAdminController::class, 'laporan_beli'])->name('laporan_beli');

Route::get('/tambah_sampah', [SuperAdminController::class, 'tambah_sampah']);

Route::get('/cari_sampah', [SuperAdminController::class, 'cari_sampah']);
