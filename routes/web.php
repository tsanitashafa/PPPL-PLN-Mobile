<?php

use Illuminate\Support\Facades\Route;

Route::get('/tes', function () {
    return view('tes'); // Ambil dari nama file template.blade.php
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/masukkan-token', function () {
    return view('MasukkanToken.masukkan-token');
})->name('masukkan-token');

Route::get('/token-success', function () {
    return view('MasukkanToken.token-success');
});

Route::get('/cek-token', function () {
    return view('CekToken.cek-token');
})->name('cek-token');

Route::get('/detail-pelanggan', function () {
    return view('CekToken.detail-pelanggan');
});

Route::get('/history-pemakaian', function () {
    return view('CekToken.history-pemakaian');
});
Route::get('/template', function () {
    return view('template'); // Ambil dari nama file template.blade.php
});



