<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenController;
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

//Route pengerjaan manzil

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












// Route untuk menampilkan halaman (asumsi sudah ada)
Route::get('/beli-token', [TokenController::class, 'showBuyTokenPage'])->name('token.buy');

// Route API untuk mencari nama pelanggan
Route::post('/api/cari-pelanggan', [TokenController::class, 'cariPelanggan'])->name('api.cari_pelanggan');





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



