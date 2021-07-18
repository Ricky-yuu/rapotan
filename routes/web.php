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

Route::get('/dataguru', [App\Http\Controllers\DataGuru::class, 'index'])->name('indexguruadmin');

Route::get('/inputnilai', [App\Http\Controllers\InputNilai::class, 'index'])->name('indexinputnilai');