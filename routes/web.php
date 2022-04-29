<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PekerjaanController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('data/mahasiswa', MahasiswaController::class);
Route::resource('data/dosen', DosenController::class);
Route::resource('data/wali', WaliController::class);

Route::resource('data/jurusan', JurusanController::class);
Route::resource('data/pekerjaan', PekerjaanController::class);