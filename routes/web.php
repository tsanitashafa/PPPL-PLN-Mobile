<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController; 


Route::get('/tes', function () {
    return view('tes'); 
});

Route::get('/template', function () {
    return view('template'); 
});




Route::get('/', [NewsController::class, 'index']);


Route::get('/artikel', [NewsController::class, 'index'])->name('artikel');



Route::get('/berita', function () {
    return view('halamanberita');
})->name('berita');

Route::get('/berita2', function () {
    return view('halamanberita2');
})->name('berita.detail');


Route::get('/bantuan', function () {
    return view('halamanbantuan1'); 
})->name('bantuan');

Route::get('/bantuan/detail', function () {
    return view('halamanbantuan2');
})->name('bantuan.detail');