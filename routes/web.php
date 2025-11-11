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

Route::get('reward', function () {
    return view('reward');
});
Route::get('voucher', function () {
    return view('voucher');
});
Route::get('infovoucher', function () {
    return view('infovoucher');
});
Route::get('riwayat', function () {
    return view('riwayat');
});
Route::get('riwayatpoin', function () {
    return view('riwayatpoin');
});
