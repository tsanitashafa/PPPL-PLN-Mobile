<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TokenController;

Route::get('/tes', function () {
    return view('tes'); // Ambil dari nama file template.blade.php
});

Route::get('/homepage', function () {
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\VoucherController;
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


<<<<<<< HEAD
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
=======

//template
>>>>>>> dev-5026231037-Al-khiqmah-Manzilatul-Mukaromah
Route::get('/template', function () {
    return view('template'); // Ambil dari nama file template.blade.php
});

<<<<<<< HEAD
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
Route::get('/', function () {
    return view('welcome');
});



// mengambil data pelanggan beli token
Route::get('/pelanggan/detail/{nomorMeter}', [PelangganController::class, 'detailPelanggan']);
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
>>>>>>> dev-5026231037-Al-khiqmah-Manzilatul-Mukaromah
