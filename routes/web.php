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

Route::get('/datasiswa', [App\Http\Controllers\AdminController::class, 'index'])->name('indexsiswaadmin');
Route::get('/dataguru', [App\Http\Controllers\DataGuru::class, 'index'])->name('indexguruadmin');
