<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/masukkan-token', function () {
    return view('MasukkanToken.masukkan-token');
});

Route::get('/token-success', function () {
    return view('MasukkanToken.token-success');
});

Route::get('/cek-token', function () {
    return view('CekToken.cek-token');
});

Route::get('/detail-pelanggan', function () {
    return view('CekToken.detail-pelanggan');
});

Route::get('/history-pemakaian', function () {
    return view('CekToken.history-pemakaian');
});
