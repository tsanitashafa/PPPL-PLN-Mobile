<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TokenController;

Route::get('/tes', function () {
    return view('tes'); // Ambil dari nama file template.blade.php
});

Route::get('/homepage', function () {
    return view('homepage');
});


/*Route::get('/masukkan-token', function () {
    return view('MasukkanToken.masukkan-token');
})->name('masukkan-token');*/ //ketimpa controller

Route::get('/token-success', function () {
    return view('MasukkanToken.token-success');
});

Route::get('/cek-token', function () {
    return view('CekToken.cek-token');
})->name('cek-token');

/*Route::get('/detail-pelanggan', function () {
    return view('CekToken.detail-pelanggan');
});*/ //ketimpa controller

Route::get('/history-pemakaian', function () {
    return view('CekToken.history-pemakaian');
});
Route::get('/template', function () {
    return view('template'); // Ambil dari nama file template.blade.php
});

//masukkan data pelanggan
Route::get('/detail-pelanggan', [PenggunaController::class, 'getDetailPelanggan'])
    ->name('detail-pelanggan');

Route::post('/lokasi/tambah', [PenggunaController::class, 'tambahLokasi'])
    ->name('lokasi.tambah');
//cek token Tiara Aulia Azadirachta Indica | 5026231148
Route::get('/cek-token/pelanggan/{pelangganId}', 
[PelangganController::class, 'cekTokenPelanggan']
)->name('cek-token-pelanggan');


//masukkan token
Route::get('/masukkan-token', [TokenController::class, 'showForm'])->name('masukkan-token');

Route::post('/verifikasi-token', [TokenController::class, 'verifikasiToken'])->name('verifikasi-token');

Route::get('/token-success', [TokenController::class, 'selamat'])->name('selamat');
Route::get('/token-failed', [TokenController::class, 'gagal'])->name('gagal');




=======
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

// Route::get('/pln', function () {
//     return view('welcome');
// });
=======
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
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman

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

<<<<<<< HEAD
Route::get('/verifyphone', [UserController::class, 'showVerifyPhone'])->name('verifyphone');
Route::post('/verifyphone', [UserController::class, 'verifyOTP'])->name('verifyotp');

Route::get('/registuser', [UserController::class, 'showRegistUser'])->name('registuser');
Route::post('/registuser', [UserController::class, 'storeUserData'])->name('storeuserdata');

Route::get('/verifyemail', [UserController::class, 'showVerifyEmail'])->name('verifyemail');

Route::get('/createpin', [UserController::class, 'showCreatePin'])->name('createpin');
Route::post('/createpin', [UserController::class, 'storePin'])->name('storepin');

Route::get('/notif', [UserController::class, 'notif'])->name('notif');
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======
Route::get('/notif', [PenggunaController::class, 'notif'])->name('notif');
Route::post('/logout', [PenggunaController::class, 'logout'])->name('logout');
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
