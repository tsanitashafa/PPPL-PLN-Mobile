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

Route::get('/', function () {
    return view('welcome');
});

Route::get('homepage', function () {
    return view('homepage');
});

// edit profile
Route::get('edit-profile-1', function () {
    return view('edit-profile-1');
});

Route::get('edit-profil-2', function () {
    return view('edit-profil-2');
});

// web.php

Route::get('/profile', [ProfileController::class, 'index']);
// Added a placeholder {id} for the edit route
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
// Consolidated update routes and made them RESTful-ish
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');


Route::get('menyambungkan-gopay', function () {
    return view('transaksi/gopay');
});

Route::get('menyambungkan-shopeePay', function () {
    return view('transaksi/shopeePay');
});


Route::get('hubungkan-gopay', function () {
    return view('transaksi/hubungkan-gopay');
});

Route::get('verifikasi-gopay', function () {
    return view('transaksi/verifikasi-gopay');
});


Route::get('transaksi-berhasil', function () {
    return view('transaksi/transaksi-berhasil');
});


Route::get('beli-token', function () {
    return view('transaksi/beli-token');
});

Route::get('pembayaran', function () {
    return view('transaksi/pembayaran');

});


Route::get('transaksi-gagal', function () {
    return view('transaksi/transaksi-gagal');
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



