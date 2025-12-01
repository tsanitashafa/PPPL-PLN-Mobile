<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\PenggunaController;
// coba cek masuk gak ya ini from my branch yok bisa dah ngantuk
//

// //Route pengerjaan manzil
// --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

//bayar token
Route::get('pembayaran', function () {
    return view('bayar-token/pembayaran');

});

Route::get('transaksi-berhasil', function () {
    return view('bayar-token/transaksi-berhasil');
});

Route::get('transaksi-gagal', function () {
    return view('bayar-token/transaksi-gagal');
});



//beli token
Route::get('beli-token', function () {
    return view('beli-token/beli-token');
});


//fitur tambahan
// edit profile
Route::get('edit-profile-1', function () {
    return view('fitur-tambahan/edit-profile-1');
});

Route::get('edit-profil-2', function () {
    return view('fitur-tambahan/edit-profile-2');
});

Route::get('/profile', [ProfileController::class, 'loadEditProfile']);
// Added a placeholder {id} for the edit route
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
// Consolidated update routes and made them RESTful-ish
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


// Hubungkan e wallete
//halaman utama masuk
Route::get('gopay', function () {
    return view('hubungkan-ewallet/gopay');
});

Route::get('shopePay', function () {
    return view('hubungkan-ewallet/shopeePay');
});


// halaman kedua

Route::get('hubungkan-gopay', function () {
    return view('hubungkan-ewallet/hubungkan-gopay');
});
Route::get('hubungkan-shopepay', function () {
    return view('hubungkan-ewallet/hubungkan-shopepay');
});



//verifikasi halaman

Route::get('verifikasi-gopay', function () {
    return view('hubungkan-ewallet/verifikasi-gopay');
});

// Also accept GET with the exact path used by the form (`verifikasi-goPay`)
Route::get('/verifikasi-goPay', function () {
    return view('hubungkan-ewallet/verifikasi-gopay');
});

Route::get('verifikasi-shopePay', function () {
    return view('hubungkan-ewallet/verifikasi-shopeePay');
});

//menyambungkan berhasil dan gagal
Route::get('menyambungkan-berhasil', function () {
    return view('hubungkan-ewallet/menyambungkan-berhasil');
});

Route::get('menyambungkan-gagal', function () {
    return view('hubungkan-ewallet/menyambungkan-gagal');
});






//homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', function () {
    return view('homepage');
});



//template
Route::get('/template', function () {
    return view('template'); // Ambil dari nama file template.blade.php
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('menyambungkan-berhasil', function () {
    return view('hubungkan-ewallet/menyambungkan-berhasil');
});
Route::get('menyambungkan-berhasil', function () {
    return view('hubungkan-ewallet/menyambungkan-gagal');
});




// mengambil data pelanggan beli token
Route::get('/pelanggan/detail/{nomorMeter}', [PelangganController::class, 'detailPelanggan']);

// mengambil data verifikasi shopepay
Route::post('/verifikasi-shopePay', [PenggunaController::class, 'verifyOTP'])->name('verifikasi.shopepay');

// mengambil data verifikasi gopay
Route::post('/verifikasi-goPay', [PenggunaController::class, 'verifyOTP'])->name('verifikasi.gopay');

// Mengambil get voucher untuk di beli token
Route::get('voucher/get/{pelangganid}', [VoucherController::class, 'getVoucher']);


// pembayaran ambil data dari beli-token
Route::post('/set-total-pembayaran', [PelangganController::class, 'setTotalPembayaran'])
    ->name('set.total.pembayaran');

Route::get('pembayaran', [PelangganController::class, 'pembayaran'])
    ->name('pembayaran');

//mengarahkan yg bayar itu transaksinya berhasil atau nggak
// Route yang menggunakan controller
// mengambil data pelanggan beli token
Route::get('/pelanggan/detail/{nomorMeter}', [PelangganController::class, 'detailPelanggan']);
// Mengambil get voucher untuk di beli token
Route::get('voucher/get/{pelangganid}', [VoucherController::class, 'getVoucher']);


// pembayaran ambil data dari beli-token
// Route::post('/set-total-pembayaran', [PelangganController::class, 'setTotalPembayaran']) // Tidak perlu lagi
//     ->name('set.total.pembayaran'); // Tidak perlu lagi

Route::get('pembayaran', [PelangganController::class, 'pembayaran'])
    ->name('pembayaran');

//mengarahkan yg bayar itu transaksinya berhasil atau nggak
Route::post('/bayar-token', [PelangganController::class, 'bayarToken'])
    ->name('bayar-token');

Route::get('/transaksi-berhasil', [PelangganController::class, 'transaksiBerhasil'])->name('transaksi.berhasil');

Route::post('/cari-pelanggan', [TokenController::class, 'getPelanggan'])
    ->name('cari-pelanggan');

// ... (Route lainnya)
