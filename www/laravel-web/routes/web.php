<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
}) ->name('mahasiswa.show');

Route::get('/nama/{nama}', function ($sahara) {
    return 'Nama saya: '.$sahara;
});

Route::get('/nim/{nim}', function ($param1 = '2557301115') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}',[MahasiswaController::class,'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/home',[HomeController::class,'index']);

