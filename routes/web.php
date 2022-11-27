<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengunjungController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::post('simpan-data', [PengunjungController::class, 'simpanPengunjung']) -> name('simpan-data');

Route::get('/', [DashboardController::class, 'index']) -> name('dashboard');

Route::get('pengunjung', [AdminController::class, 'index']) -> name('admin-pengunjung');

Route::get('formTambah', [AdminController::class, 'formTambah']) -> name('admin-form-tambah');

Route::post('simpan-pengunjung', [AdminController::class, 'simpanData']) -> name('admin-simpan-pengunjung');

Route::post('hapusPengunjung/{id}', [AdminController::class, 'hapusPengunjung']) -> name('admin-hapus-pengunjung');

Route::get('formEdit/{id}', [AdminController::class, 'editPengunjung']) -> name('admin-edit-pengunjung');

Route::post('update-pengunjung', [AdminController::class, 'updatePengunjung']) -> name('admin-update-pengunjung');
