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

Route::get('homepage', function () {
    return view('homepage');
});

Route::get('edit-profile-1', function () {
    return view('edit-profile-1');
});

Route::get('edit-profil-2', function () {
    return view('edit-profil-2');
});

Route::get('transaksi-berhasil', function () {
    return view('transaksi-berhasil');
});

Route::get('pembayaran', function () {
    return view('pembayaran');

});


Route::get('transaksi-gagal', function () {
    return view('transaksi-gagal');
});

