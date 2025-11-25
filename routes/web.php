<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('homepage', [PenggunaController::class, 'ambilDataPengguna'])->name('homepage');
Route::get('edit-profile-1', [ProfileController::class, 'editProfile1'])->name('edit-profile-1');
Route::get('edit-profil-2', [ProfileController::class, 'editProfile2'])->name('edit-profil-2');
Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update-profile');
Route::post('/toggle-notification', [PenggunaController::class, 'toggleNotification'])->name('toggle-notification');

Route::get('transaksi-berhasil', function () {
    return view('transaksi-berhasil');
});
Route::get('pembayaran', function () {
    return view('pembayaran');

});
Route::get('transaksi-gagal', function () {
    return view('transaksi-gagal');
    
});
Route::get('/', [PenggunaController::class, 'welcome'])->name('welcome');

Route::get('/registerphone', [PenggunaController::class, 'showRegisterPhone'])->name('registerphone');
Route::post('/registerphone', [PenggunaController::class, 'cekNoHP']);

Route::get('/verifyphone', [PenggunaController::class, 'showVerifyPhone'])->name('verifyphone');
Route::post('/verifyphone', [PenggunaController::class, 'verifyOTP'])->name('verifyotp');

Route::get('/registuser', [PenggunaController::class, 'showRegistUser'])->name('registuser');
Route::post('/registuser', [PenggunaController::class, 'savePengguna'])->name('storeuserdata');

Route::get('/verifyemail', [PenggunaController::class, 'showVerifyEmail'])->name('verifyemail');
Route::post('/verifyemail', [PenggunaController::class, 'verifyEmailOTP'])->name('verifyemailotp');

Route::get('/createpin', [PenggunaController::class, 'showCreatePin'])->name('createpin');
Route::post('/createpin', [PenggunaController::class, 'setPIN'])->name('storepin');

Route::get('/loginphone', [PenggunaController::class, 'showLoginPhone'])->name('loginphone');
Route::post('/processloginphone', [PenggunaController::class, 'cekNoHPLog'])->name('processloginphone');

Route::get('/loginpin', [PenggunaController::class, 'showLoginPin'])->name('loginpin');
Route::post('/processloginpin', [PenggunaController::class, 'setLogin'])->name('processloginpin');

Route::get('/notif', [PenggunaController::class, 'notif'])->name('notif');
Route::post('/logout', [PenggunaController::class, 'logout'])->name('logout');
