<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\Pesan_langsungController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', function () {
    return view('registrasi');
});
    
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout']);


// ----- Administrator -----
Route::get('/admin', [AdministratorController::class, 'index'])->middleware(['auth', 'admin']);

//--- Kasir ---
Route::controller(KasirController::class)->prefix('admin/kasir')->middleware(['auth', 'admin'])->group(function(){
    Route::get('', 'index')->name('kasir');
    Route::get('tambah', 'tambah')->name('kasir.tambah');
    Route::post('tambah', 'simpan')->name('kasir.tambah.simpan');
    Route::get('hapus/{id}', 'hapus')->name('kasir.hapus');
});

//--- Meja ---
Route::controller(MejaController::class)->prefix('admin/meja')->middleware(['auth', 'admin'])->group(function(){
    Route::get('', 'admin')->name('meja');
    Route::get('tambah', 'tambah')->name('meja.tambah');
    Route::post('tambah', 'simpan')->name('meja.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('meja.edit');
    Route::post('edit/{id}', 'update')->name('meja.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('meja.hapus');
});

// --- Menu ---
Route::controller(MenuController::class)->prefix('admin/menu')->middleware(['auth', 'admin'])->group(function(){
    Route::get('', 'index')->name('menu');
    Route::get('tambah', 'tambah')->name('menu.tambah');
    Route::post('tambah', 'simpan')->name('menu.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('menu.edit');
    Route::post('edit/{id}', 'update')->name('menu.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('menu.hapus');
});


// ----- Kasir -----
Route::get('/kasir', [KasirController::class, 'home'])->middleware(['auth', 'kasir']);

// --- Pesan Langsung ---
Route::get('/kasir/pesan langsung', [Pesan_langsungController::class, 'index'])->middleware(['auth', 'kasir']);
// Route::resource('kasir/pesan langsung', Pesan_langsungController::class);

// --- Menu ---
Route::get('/kasir/reservasi', [ReservasiController::class, 'index'])->middleware(['auth', 'kasir']);
// Route::resource('kasir/reservasi', ReservasiController::class);

// --- Meja ---
Route::get('/kasir/meja', [MejaController::class, 'kasir'])->middleware(['auth', 'kasir']);
// Route::resource('kasir/meja', MejaController::class);


// ----- Manajer -----
Route::get('/manajer', [ManajerController::class, 'index'])->middleware(['auth', 'manajer']);

// --- Penjualan ---
Route::get('/manajer/penjualan', [OrderController::class, 'index'])->middleware(['auth', 'manajer']);
// Route::resource('manajer/penjualan', OrderController::class);

// --- Menu ---
Route::get('/manajer/menu', [MenuController::class, 'manajer'])->middleware(['auth', 'manajer']);
// Route::resource('manajer/menu', MenuController::class);

// --- Meja ---
Route::get('/manajer/meja', [MejaController::class, 'manajer'])->middleware(['auth', 'manajer']);
// Route::resource('manajer/meja', MejaController::class);
