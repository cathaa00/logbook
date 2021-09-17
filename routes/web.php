<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaMagangController;
use App\Http\Controllers\MahasiswaHibahController;
use App\Http\Controllers\MahasiswaWorkshopController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['superadmin'])->group(function () {
        Route::get('superadmin', [SuperadminController::class, 'index']);
    });
 
    Route::middleware(['dosen'])->group(function () {
        Route::get('dosen', [DosenController::class, 'index']);
    });

    Route::middleware(['mahasiswa_magang'])->group(function () {
        Route::get('mahasiswa_magang', [MahasiswaMagangController::class, 'index']);
    });

    Route::middleware(['mahasiswa_hibah'])->group(function () {
        Route::get('mahasiswa_hibah', [MahasiswaHibahController::class, 'index']);
        Route::get('mahasiswa_hibah/input_logbook', [MahasiswaHibahController::class, 'create']);
    });

    Route::middleware(['mahasiswa_workshop'])->group(function () {
        Route::get('mahasiswa_workshop', [MahasiswaWorkshopController::class, 'index']);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        return view('auth.login');
    });
 
});