<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/datasiswa', [App\Http\Controllers\AdminController::class, 'siswa'])->name('indexsiswaadmin');
Route::get('/kelas', [App\Http\Controllers\AdminController::class, 'kelas'])->name('menampilkankelas');

Route::get('/nilaisiswa', [App\Http\Controllers\DataNilai::class, 'siswa'])->name('nilaisiswa');
Route::get('/nilaikelas', [App\Http\Controllers\DataNilai::class, 'kelas'])->name('menampilkannilaikelas');
Route::get('/detail', [App\Http\Controllers\DataNilai::class, 'detail'])->name('detailnilaikelas');

Route::get('/dataguru', [App\Http\Controllers\DataGuru::class, 'index'])->name('indexguruadmin');
Route::get('/datanilai', [App\Http\Controllers\InputNilai::class, 'index'])->name('datanilai');

Route::get('/mapel', [App\Http\Controllers\InputNilai::class, 'index'])->name('dataMapel');
Route::get('/inputnilai', [App\Http\Controllers\InputNilai::class, 'dataSiswa'])->name('dataSiswa');
Route::post('/simpanNilai', [App\Http\Controllers\InputNilai::class, 'simpanNilai'])->name('simpanNilai');
