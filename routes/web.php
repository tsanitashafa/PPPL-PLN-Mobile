<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPengguna;

Route::get('/', function () {
    return view('welcome');
});
Route::get('homepage', [ControllerPengguna::class, 'homepage'])->name('homepage');
Route::get('edit-profile-1', [ControllerPengguna::class, 'editProfile1'])->name('edit-profile-1');
Route::get('edit-profil-2', [ControllerPengguna::class, 'editProfile2'])->name('edit-profil-2');
Route::post('/update-profile', [ControllerPengguna::class, 'updateProfile'])->name('update-profile');
Route::post('/toggle-notification', [ControllerPengguna::class, 'toggleNotification'])->name('toggle-notification');

Route::get('transaksi-berhasil', function () {
    return view('transaksi-berhasil');
});
Route::get('pembayaran', function () {
    return view('pembayaran');

});
Route::get('transaksi-gagal', function () {
    return view('transaksi-gagal');
});
Route::get('/', [ControllerPengguna::class, 'welcome'])->name('welcome');

Route::get('/registerphone', [ControllerPengguna::class, 'showRegisterPhone'])->name('registerphone');
Route::post('/registerphone', [ControllerPengguna::class, 'storePhone']);

Route::get('/verifyphone', [ControllerPengguna::class, 'showVerifyPhone'])->name('verifyphone');
Route::post('/verifyphone', [ControllerPengguna::class, 'verifyOTP'])->name('verifyotp');

Route::get('/registuser', [ControllerPengguna::class, 'showRegistUser'])->name('registuser');
Route::post('/registuser', [ControllerPengguna::class, 'storeUserData'])->name('storeuserdata');

Route::get('/verifyemail', [ControllerPengguna::class, 'showVerifyEmail'])->name('verifyemail');
Route::post('/verifyemail', [ControllerPengguna::class, 'verifyEmailOTP'])->name('verifyemailotp');

Route::get('/createpin', [ControllerPengguna::class, 'showCreatePin'])->name('createpin');
Route::post('/createpin', [ControllerPengguna::class, 'storePin'])->name('storepin');

Route::get('/loginphone', [ControllerPengguna::class, 'showLoginPhone'])->name('loginphone');
Route::post('/processloginphone', [ControllerPengguna::class, 'processLoginPhone'])->name('processloginphone');

Route::get('/loginpin', [ControllerPengguna::class, 'showLoginPin'])->name('loginpin');
Route::post('/processloginpin', [ControllerPengguna::class, 'processLoginPin'])->name('processloginpin');

Route::get('/notif', [ControllerPengguna::class, 'notif'])->name('notif');
Route::post('/logout', [ControllerPengguna::class, 'logout'])->name('logout');
