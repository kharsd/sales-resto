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

// Route::get('/manajer/menu', [MenuController::class, 'index']);
Route::resource('manajer/menu', MenuController::class);

// Route::get('/manajer/meja', [MejaController::class, 'index']);
Route::resource('manajer/meja', MejaController::class);



// ----- Kasir -----

// Route::get('/kasir', function () {
//     return view('layout./kasir');
// });
Route::get('/kasir', [KasirController::class, 'index']);

// Route::get('/kasir/pesan langsung', [Pesan_langsungController::class, 'index']);
Route::resource('kasir/pesan langsung', Pesan_langsungController::class);

// Route::get('/kasir/reservasi', [ReservasiController::class, 'index']);
Route::resource('kasir/reservasi', ReservasiController::class);

// Route::get('/kasir/meja', [MejaController::class, 'index']);
Route::resource('kasir/meja', MejaController::class);



// ----- Administrator -----

// Route::get('/administrator', function () {
//     return view('layout./administrator');
// });
Route::get('/administrator', [AdministratorController::class, 'index']);

Route::get('/administrator/kasir', function () {
    return view('administrator./kasir');
});

// Route::get('/administrator/meja', [MejaController::class, 'index']);
Route::resource('administrator/meja', MejaController::class);

// Route::get('/administrator/menu', [MenuController::class, 'index']);
Route::resource('administrator/menu', MenuController::class);