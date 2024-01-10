<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pengadilan', [App\Http\Controllers\PengadilanController::class, 'index']);
Route::get('/pengadilan/create', [App\Http\Controllers\PengadilanController::class, 'create']);
Route::post('/pengadilan', [App\Http\Controllers\PengadilanController::class, 'store']);
Route::get('/pengadilan/edit/{id}', [App\Http\Controllers\PengadilanController::class, 'edit']);
Route::patch('/pengadilan/{id}', [App\Http\Controllers\PengadilanController::class, 'update']);
Route::delete('/pengadilan/{id}', [App\Http\Controllers\PengadilanController::class, 'destroy']);

Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'index']);
Route::get('/jadwal/create', [App\Http\Controllers\JadwalController::class, 'create']);
Route::post('/jadwal', [App\Http\Controllers\JadwalController::class, 'store']);
Route::get('/jadwal/edit/{id}', [App\Http\Controllers\JadwalController::class, 'edit']);
Route::patch('/jadwal/{id}', [App\Http\Controllers\JadwalController::class, 'update']);
Route::delete('/jadwal/{id}', [App\Http\Controllers\JadwalController::class, 'destroy']);

Route::get('/peserta', [App\Http\Controllers\PesertaController::class, 'index']);
Route::get('/peserta/create', [App\Http\Controllers\PesertaController::class, 'create']);
Route::post('/peserta', [App\Http\Controllers\PesertaController::class, 'store']);
Route::get('/peserta/edit/{id}', [App\Http\Controllers\PesertaController::class, 'edit']);
Route::patch('/peserta/{id}', [App\Http\Controllers\PesertaController::class, 'update']);
Route::delete('/peserta/{id}', [App\Http\Controllers\PesertaController::class, 'destroy']);