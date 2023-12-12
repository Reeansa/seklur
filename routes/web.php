<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaKeluargaController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\KelolaLaporanController;
use App\Http\Controllers\LahirController;
use App\Http\Controllers\MeninggalController;
use App\Http\Controllers\PendatangController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PindahController;
use App\Models\KartuKeluarga;
use App\Models\Lahir;
use App\Models\Meninggal;
use App\Models\Pendatang;
use App\Models\Penduduk;
use App\Models\Pindah;
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

Route::get( '/dashboard', function () {
    $data = [ 
        'penduduk' => Penduduk::count(),
        'kartu_keluarga' => KartuKeluarga::count(),
        'laki_laki' => Penduduk::where( 'jk', 'l' )->count(),
        'perempuan' => Penduduk::where( 'jk', 'p' )->count(),
        'lahir' => Lahir::count(),
        'meninggal' => Meninggal::count(),
        'pendatang' => Pendatang::count(),
        'pindah' => Pindah::count(),
    ];
    return view('dashboard.main', $data);
})->name('dashboard');

Route::resource('data-penduduk', PendudukController::class);
Route::resource('data-kartu-keluarga', KartuKeluargaController::class);
Route::get('data-kartu-keluarga/anggota-kk/{data_kartu_keluarga}', [KartuKeluargaController::class, 'anggotaKeluarga'])->name('data-kartu-keluarga.anggota-kk');
Route::post('data-kartu-keluarga/anggota-kk/', [KartuKeluargaController::class, 'tambahAnggota'])->name('data-kartu-keluarga.tambah-anggota');
Route::resource('data-lahir', LahirController::class);
Route::resource( 'data-meninggal', MeninggalController::class);
Route::resource( 'data-pendatang', PendatangController::class);
Route::resource( 'data-pindah', PindahController::class);
// // CRUD Penduduk
// Route::get('/data-penduduk', [PendudukController::class, 'index'])->name('data-penduduk');
// Route::get('/data-penduduk/create', [PendudukController::class, 'create'])->name('data-penduduk.create');
// Route::post('/data-penduduk/create', [PendudukController::class, 'store'])->name('data-penduduk.store');
// Route::get('/data-penduduk/edit/{id}', [PendudukController::class, 'edit'])->name('data-penduduk.edit');
// Route::post('/data-penduduk/edit/{id}', [PendudukController::class, 'update'])->name('data-penduduk.update');
// Route::get('/data-penduduk/delete/{id}', [PendudukController::class, 'destroy'])->name('data-penduduk.destroy');

// CRUD Kartu Keluarga
// Route::get('/data-kartu-keluarga', [KartuKeluargaController::class, 'index'])->name('data-kartu-keluarga');
// Route::get('/data-kartu-keluarga/create', [KartuKeluargaController::class, 'create'])->name('data-kartu-keluarga.create');
// Route::post('/data-kartu-keluarga/create', [KartuKeluargaController::class, 'store'])->name('data-kartu-keluarga.store');
// Route::get('/data-kartu-keluarga/edit/{kartuKeluarga}', [KartuKeluargaController::class, 'edit'])->name('data-kartu-keluarga.edit');
// Route::get('/data-kartu-keluarga/anggota/{kartuKeluarga}', [KartuKeluargaController::class, 'kartuKeluargaAnggota'])->name('data-kartu-keluarga.anggota');
// Route::post('/data-kartu-keluarga/edit/{kartuKeluarga}', [KartuKeluargaController::class, 'update'])->name('data-kartu-keluarga.update');
// Route::get('/data-kartu-keluarga/delete/{kartuKeluarga}', [KartuKeluargaController::class, 'destroy'])->name('data-kartu-keluarga.destroy');

// CRUD Lahir
// Route::get( '/data-lahir', [ LahirController::class, 'index' ] )->name( 'data-lahir' );
// Route::get( '/data-lahir/create', [ LahirController::class, 'create' ] )->name( 'data-lahir.create' );
// Route::post( '/data-lahir/create', [ LahirController::class, 'store' ] )->name( 'data-lahir.store' );
// Route::get( '/data-lahir/edit/{kartuKeluarga}', [ LahirController::class, 'edit' ] )->name( 'data-lahir.edit' );
// Route::post( '/data-lahir/edit/{kartuKeluarga}', [ LahirController::class, 'update' ] )->name( 'data-lahir.update' );
// Route::get( '/data-lahir/delete/{kartuKeluarga}', [ LahirController::class, 'destroy' ] )->name( 'data-lahir.destroy' );

// // CRUD Meninggal
// Route::get( '/data-meninggal', [ MeninggalController::class, 'index' ] )->name( 'data-meninggal' );
// Route::get( '/data-meninggal/create', [ MeninggalController::class, 'create' ] )->name( 'data-meninggal.create' );
// Route::post( '/data-meninggal/create', [ MeninggalController::class, 'store' ] )->name( 'data-meninggal.store' );
// Route::get( '/data-meninggal/edit/{kartuKeluarga}', [ MeninggalController::class, 'edit' ] )->name( 'data-meninggal.edit' );
// Route::post( '/data-meninggal/edit/{kartuKeluarga}', [ MeninggalController::class, 'update' ] )->name( 'data-meninggal.update' );
// Route::get( '/data-meninggal/delete/{kartuKeluarga}', [ MeninggalController::class, 'destroy' ] )->name( 'data-meninggal.destroy' );

// // CRUD Pendatang
// Route::get( '/data-pendatang', [ PendatangController::class, 'index' ] )->name( 'data-pendatang' );
// Route::get( '/data-pendatang/create', [ PendatangController::class, 'create' ] )->name( 'data-pendatang.create' );
// Route::post( '/data-pendatang/create', [ PendatangController::class, 'store' ] )->name( 'data-pendatang.store' );
// Route::get( '/data-pendatang/edit/{kartuKeluarga}', [ PendatangController::class, 'edit' ] )->name( 'data-pendatang.edit' );
// Route::post( '/data-pendatang/edit/{kartuKeluarga}', [ PendatangController::class, 'update' ] )->name( 'data-pendatang.update' );
// Route::get( '/data-pendatang/delete/{kartuKeluarga}', [ PendatangController::class, 'destroy' ] )->name( 'data-pendatang.destroy' );

// // CRUD Pendatang
// Route::get( '/data-pindah', [ PindahController::class, 'index' ] )->name( 'data-pindah' );
// Route::get( '/data-pindah/create', [ PindahController::class, 'create' ] )->name( 'data-pindah.create' );
// Route::post( '/data-pindah/create', [ PindahController::class, 'store' ] )->name( 'data-pindah.store' );
// Route::get( '/data-pindah/edit/{kartuKeluarga}', [ PindahController::class, 'edit' ] )->name( 'data-pindah.edit' );
// Route::post( '/data-pindah/edit/{kartuKeluarga}', [ PindahController::class, 'update' ] )->name( 'data-pindah.update' );
// Route::get( '/data-pindah/delete/{kartuKeluarga}', [ PindahController::class, 'destroy' ] )->name( 'data-pindah.destroy' );

// CRUD Kelola Laporan
Route::get( '/kelola-laporan', [ KelolaLaporanController::class, 'index' ] )->name( 'kelola-laporan' );
Route::get( '/kelola-laporan/create', [ KelolaLaporanController::class, 'create' ] )->name( 'kelola-laporan.create' );
Route::post( '/kelola-laporan/create', [ KelolaLaporanController::class, 'store' ] )->name( 'kelola-laporan.store' );
Route::get( '/kelola-laporan/edit/{kartuKeluarga}', [ KelolaLaporanController::class, 'edit' ] )->name( 'kelola-laporan.edit' );
Route::post( '/kelola-laporan/edit/{kartuKeluarga}', [ KelolaLaporanController::class, 'update' ] )->name( 'kelola-laporan.update' );
Route::get( '/kelola-laporan/delete/{kartuKeluarga}', [ KelolaLaporanController::class, 'destroy' ] )->name( 'kelola-laporan.destroy' );

// CRUD Kelola Admin
Route::get( '/kelola-admin', [ AdminController::class, 'index' ] )->name( 'kelola-admin' );
Route::get( '/kelola-admin/create', [ AdminController::class, 'create' ] )->name( 'kelola-admin.create' );
Route::post( '/kelola-admin/create', [ AdminController::class, 'store' ] )->name( 'kelola-admin.store' );
Route::get( '/kelola-admin/edit/{kartuKeluarga}', [ AdminController::class, 'edit' ] )->name( 'kelola-admin.edit' );
Route::post( '/kelola-admin/edit/{kartuKeluarga}', [ AdminController::class, 'update' ] )->name( 'kelola-admin.update' );
Route::get( '/kelola-admin/delete/{kartuKeluarga}', [ AdminController::class, 'destroy' ] )->name( 'kelola-admin.destroy' );