<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KonfigurasiController;
use Illuminate\Support\Facades\Route;

// Profile View
Route::get('/', function () {
    return view('halaman.index');
});
Route::get('/sejarah', function () {
    return view('halaman.tentang');
})->name('sejarah');
Route::get('/visi-misi', function () {
    return view('halaman.visiMisi');
})->name('visi-misi');
Route::get('/anak-asuh', function () {
    return view('halaman.anakasuh');
})->name('anak-asuh');
Route::get('/kegiatan', function () {
    return view('halaman.kegiatan');
})->name('kegiatan');
Route::get('/pengurus', function () {
    return view('halaman.pengurus');
})->name('pengurus');
Route::get('/galeri', function () {
    return view('halaman.galeri');
})->name('galeri');

// Dashboard VIew
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login-try', [AuthController::class, 'login'])->name('login.try');

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard'], function () {
    Route::get('/admin', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    // Konfigurasi
    Route::controller(KonfigurasiController::class)->group(function () {
       Route::get('/konfigurasi', 'index')->name('konfigurasi');
       Route::post('/konfigurasi.update', 'update')->name('konfigurasi.update');
    });

});