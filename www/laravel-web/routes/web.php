<?php


use Illuminate\Support\Facades\Route;


use App\Http\Controllers\MahasiswaController;


use App\Http\Controllers\HomeController;


use App\Http\Controllers\QuestionController;


use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});


Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');


Route::get('/nama/{sahara}', function ($sahara) {
    return 'Nama saya: '.$sahara;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301115'){
    return 'NIM saya: '.$param1;
});


Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');


Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);


Route::get('/home', [HomeController::class, 'index']);


Route::post('question/store', [QuestionController::class, 'store'])
->name('question.store');


Route::get('/home-question-respon', function () {
return view('home-question-respon');
})->name('home-question-respon');


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
