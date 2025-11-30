<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TukarPoinController;
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

Route::get('/reward', [VoucherController::class, 'loadReward']);
Route::get('/voucher', [VoucherController::class, 'loadVoucher'])->name('voucher/voucher');
Route::get('/infovoucher/{id}', [VoucherController::class, 'loadInfoVoucher'])->name('voucher/infovoucher');
Route::get('/riwayat', [RiwayatController::class, 'loadRiwayat'])->name('riwayat/riwayat');
Route::get('/riwayatpoin', [RiwayatController::class, 'loadRiwayatPoin'])->name('riwayat/riwayatpoin');
Route::get('/tukar', [TukarPoinController::class, 'loadTukarSemua']);
Route::get('/tukar/{id}', [TukarPoinController::class, 'loadTukarById']);
Route::get('/tukar/redeem/{id}', [TukarPoinController::class, 'redeem']);

