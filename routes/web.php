<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BantuanController;


Route::get('/tes', function () {
    return view('tes'); 
});

Route::get('/template', function () {
    return view('template'); 
});




Route::get('/', [NewsController::class, 'index']);


Route::get('/artikel', [NewsController::class, 'index'])->name('artikel');



Route::get('/berita', [NewsController::class, 'berita'])->name('berita');

Route::get('/berita/{id}', [NewsController::class, 'beritaDetail'])->name('berita.detail');


Route::get('/bantuan', [BantuanController::class, 'bantuan'])->name('bantuan');

Route::get('/bantuan/{id}', [BantuanController::class, 'bantuanDetail'])->name('bantuan.detail');
