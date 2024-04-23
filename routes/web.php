<?php

use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriPostinganController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\PengurusController;
use Illuminate\Support\Facades\Route;

// Profile View
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('halaman.index');
    Route::get('/anak-asuh', 'anakasuh')->name('anak-asuh');
    Route::get('/kegiatan', 'kegiatan')->name('kegiatan');
    Route::get('/pengurus', 'pengurus')->name('pengurus');
    Route::get('/galeri', 'galeri')->name('galeri');
    Route::get('/sejarah', 'sejarah')->name('sejarah');
    Route::get('/visi-misi', 'visiMisi')->name('visi-misi');
 });


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
    Route::group(['prefix' => 'data'], function () {
        // Data Anak Asuh
        Route::controller(AnakAsuhController::class)->group(function () {
           Route::get('/anak-asuh', 'index')->name('db.anak-asuh');
           Route::get('/anak-asuh/create', 'create')->name('db.anak-asuh.create');
           Route::post('/anak-asuh/store', 'store')->name('db.anak-asuh.store');
           Route::get('/anak-asuh/edit/{id}', 'edit')->name('db.anak-asuh.edit');
           Route::post('/anak-asuh/update/{id}', 'update')->name('db.anak-asuh.update');
           Route::get('/anak-asuh/destroy/{id}', 'destroy')->name('db.anak-asuh.destroy');
        });
        Route::controller(PengurusController::class)->group(function () {
           Route::get('/pengurus', 'index')->name('db.pengurus');
           Route::get('/pengurus/create', 'create')->name('db.pengurus.create');
           Route::post('/pengurus/store', 'store')->name('db.pengurus.store');
           Route::get('/pengurus/edit/{id}', 'edit')->name('db.pengurus.edit');
           Route::post('/pengurus/update/{id}', 'update')->name('db.pengurus.update');
           Route::get('/pengurus/destroy/{id}', 'destroy')->name('db.pengurus.destroy');
        });
        Route::controller(GalleryController::class)->group(function () {
           Route::get('/galeri', 'index')->name('db.galeri');
           Route::get('/galeri/create', 'create')->name('db.galeri.create');
           Route::post('/galeri/store', 'store')->name('db.galeri.store');
           Route::get('/galeri/edit/{id}', 'edit')->name('db.galeri.edit');
           Route::post('/galeri/update/{id}', 'update')->name('db.galeri.update');
           Route::get('/galeri/destroy/{id}', 'destroy')->name('db.galeri.destroy');
        });
        Route::controller(KategoriPostinganController::class)->group(function () {
           Route::get('/kategori', 'index')->name('db.kategori');
           Route::get('/kategori/create', 'create')->name('db.kategori.create');
           Route::post('/kategori/store', 'store')->name('db.kategori.store');
           Route::get('/kategori/edit/{id}', 'edit')->name('db.kategori.edit');
           Route::post('/kategori/update/{id}', 'update')->name('db.kategori.update');
           Route::get('/kategori/destroy/{id}', 'destroy')->name('db.kategori.destroy');
        });
        Route::controller(KegiatanController::class)->group(function () {
           Route::get('/postingan', 'index')->name('db.postingan');
           Route::get('/postingan/create', 'create')->name('db.postingan.create');
           Route::post('/postingan/store', 'store')->name('db.postingan.store');
           Route::get('/postingan/edit/{id}', 'edit')->name('db.postingan.edit');
           Route::post('/postingan/update/{id}', 'update')->name('db.postingan.update');
           Route::get('/postingan/destroy/{id}', 'destroy')->name('db.postingan.destroy');
        });
    });

});