<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\RiwayatController;
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

// Route::get('/pln', function () {
//     return view('welcome');
// });


// Route::get('/registerphone', function () {
//     return view('registerphone');
// });

// Route::get('/verifyphone', function () {
//     return view('verifyphone');
// });

// Route::get('/registuser', function () {
//     return view('registuser');
// });

// Route::get('/verifyemail', function () {
//     return view('verifyemail');
// });

// Route::get('/createpin', function () {
//     return view('createpin');
// });


Route::get('/', [UserController::class, 'welcome'])->name('welcome');

Route::get('/registerphone', [UserController::class, 'showRegisterPhone'])->name('registerphone');
Route::post('/registerphone', [UserController::class, 'storePhone']);

Route::get('/verifyphone', [UserController::class, 'showVerifyPhone'])->name('verifyphone');
Route::post('/verifyphone', [UserController::class, 'verifyOTP'])->name('verifyotp');

Route::get('/registuser', [UserController::class, 'showRegistUser'])->name('registuser');
Route::post('/registuser', [UserController::class, 'storeUserData'])->name('storeuserdata');

Route::get('/verifyemail', [UserController::class, 'showVerifyEmail'])->name('verifyemail');

Route::get('/createpin', [UserController::class, 'showCreatePin'])->name('createpin');
Route::post('/createpin', [UserController::class, 'storePin'])->name('storepin');

Route::get('/notif', [UserController::class, 'notif'])->name('notif');
