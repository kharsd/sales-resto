<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Pesan_langsungController;
use App\Http\Controllers\ReservasiController;

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

// ----- Login -----
Route::get('/', function () {
    return view('welcome');
});



// ----- Manajer -----

// Route::get('/manajer', function () {
//     return view('layout./manajer');
// });
Route::get('/manajer', [ManajerController::class, 'index']);

// Route::get('/manajer/penjualan', [OrderController::class, 'index']);
Route::resource('manajer/penjualan', OrderController::class);

Route::get('/manajer/menu', [MenuController::class, 'manajer']);
// Route::resource('manajer/menu', MenuController::class);

Route::get('/manajer/meja', [MejaController::class, 'manajer']);
// Route::resource('manajer/meja', MejaController::class);



// ----- Kasir -----

// Route::get('/kasir', function () {
//     return view('layout./kasir');
// });
Route::get('/kasir', [KasirController::class, 'index']);

// Route::get('/kasir/pesan langsung', [Pesan_langsungController::class, 'index']);
Route::resource('kasir/pesan langsung', Pesan_langsungController::class);

// Route::get('/kasir/reservasi', [ReservasiController::class, 'index']);
Route::resource('kasir/reservasi', ReservasiController::class);

Route::get('/kasir/meja', [MejaController::class, 'kasir']);
// Route::resource('kasir/meja', MejaController::class);



// ----- Administrator -----

// Route::get('/administrator', function () {
//     return view('layout./administrator');
// });
Route::get('/admin', [AdministratorController::class, 'index']);

Route::get('/admin/kasir', function () {
    return view('layout./kasir');
});

//--- Meja ---
// Route::get('/admin/meja', [MejaController::class, 'admin']);
Route::controller(MejaController::class)->prefix('admin/meja')->group(function(){
    Route::get('', 'admin')->name('meja');
    Route::get('tambah', 'tambah')->name('meja.tambah');
    Route::post('tambah', 'simpan')->name('meja.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('meja.edit');
    Route::post('edit/{id}', 'update')->name('meja.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('meja.hapus');
});
// Route::resource('administrator/meja', MejaController::class);

// --- Menu ---
Route::controller(MenuController::class)->prefix('admin/menu')->group(function(){
    Route::get('', 'index')->name('menu');
    Route::get('tambah', 'tambah')->name('menu.tambah');
    Route::post('tambah', 'simpan')->name('menu.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('menu.edit');
    Route::post('edit/{id}', 'update')->name('menu.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('menu.hapus');
});

// Route::resource('administrator/menu', MenuController::class);
// Route::get('/administrator/menu', [MenuController::class, 'administrator']);
// Route::get('/administrator/menu/tambah', [MenuController::class, 'administratorTambah']);
// Route::get('/administrator/menu/edit/{id}', [MenuController::class, 'administratorEdit']);
// Route::get('/administrator/menu/hapus/{id}', [MenuController::class, 'administratorHapus']);