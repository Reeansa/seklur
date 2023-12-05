<?php

use App\Http\Controllers\PendudukController;
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

Route::get('/dashboard', function () {
    return view('dashboard.main');
})->name('dashboard');

Route::get('/data-penduduk', [PendudukController::class, 'index'])->name('data-penduduk');
Route::get('/data-penduduk/create', [PendudukController::class, 'create'])->name('data-penduduk.create');
Route::post('/data-penduduk/create', [PendudukController::class, 'store'])->name('data-penduduk.store');
Route::get('/data-penduduk/edit/{id}', [PendudukController::class, 'edit'])->name('data-penduduk.edit');
Route::post('/data-penduduk/edit/{id}', [PendudukController::class, 'update'])->name('data-penduduk.update');
Route::get('/data-penduduk/delete/{id}', [PendudukController::class, 'destroy'])->name('data-penduduk.destroy');