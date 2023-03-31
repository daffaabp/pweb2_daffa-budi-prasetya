<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeminjamanController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(
    function() {

        Route::resource('barang', BarangController::class);
        Route::resource('peminjaman', PeminjamanController::class);

// Data Barang Controller
Route::get('data_barang', [BarangController::class, "index"])->name('halaman.data_barang.index');
Route::get('tambah_barang', [BarangController::class, "create"])->name('halaman.data_barang.create');
Route::post('tambah', [BarangController::class, "store"]);
Route::get('edit_barang/{id}', [BarangController::class, "edit"])->name('halaman.data_barang.edit');
Route::put('data_barang/{id}', [BarangController::class, "update"]);
Route::get('hapus_barang/{id}', [BarangController::class, "delete"]);
Route::delete('/barang/{id}', [BarangController::class, "destroy"]);

// Data Peminjaman Controller
Route::get('data_peminjaman', [PeminjamanController::class, "index"])->name('halaman.data_peminjaman.index');
Route::get('tambah_peminjaman', [PeminjamanController::class, "create"])->name('halaman.data_peminjaman.create');
Route::post('tambahh', [PeminjamanController::class, "store"]);
Route::get('edit_peminjaman/{id}', [PeminjamanController::class, "edit"])->name('halaman.data_peminjaman.edit');
Route::put('data_peminjaman/{id}', [PeminjamanController::class, "update"]);
Route::get('hapus_peminjaman/{id}', [PeminjamanController::class, "delete"]);
Route::delete('/peminjaman/{id}', [PeminjamanController::class, "destroy"]);
    }
);




// Route::get('peminjaman', [BarangController::class, "index"])->name('halaman.peminjaman.index');

require __DIR__.'/auth.php';