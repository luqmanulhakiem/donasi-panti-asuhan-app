<?php

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
    
});