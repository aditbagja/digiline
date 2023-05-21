<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KirimController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
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

// Tampilan Awal
Route::get('/', [HomeController::class,'index']);
Route::get('about', [HomeController::class,'about']);
Route::get('dashboard',[HomeController::class,'dashboard'])->middleware('isLogin');

// Fitur Login
Route::get('/login', [HomeController::class,'login'])->middleware('isTamu');
Route::post('/auth/login', [AuthController::class,'login'])->middleware('isTamu');
Route::get('/auth/logout', [AuthController::class,'logout']);
Route::get('/register', [AuthController::class,'register'])->middleware('isTamu');
Route::post('/auth/create', [AuthController::class,'create'])->middleware('isTamu');

//Fitur Kirim Saldo 
Route::get('kirim',[KirimController::class,'index']);
Route::get('kirim/{id}',[KirimController::class,'tujuan']);
Route::post('kirim/{id}',[KirimController::class,'tujuanKirim']);
Route::get('kirim/jumlah/{id}',[KirimController::class,'jumlah']);
Route::delete('kirim/jumlah/{id}',[KirimController::class,'batal']);
Route::put('kirim/jumlah/{id}',[KirimController::class,'jumlahTransfer']);
Route::get('kirim/rinciantrf/{id}',[KirimController::class,'rinciantrf']);
Route::get('kirim/rinciantrf/pembayaran/{id}',[KirimController::class,'metodebayar']);
Route::put('kirim/rinciantrf/pembayaran/{id}',[KirimController::class,'sukses']);
Route::delete('kirim/rinciantrf/{id}',[KirimController::class,'batal']);
Route::get('kirim/detail/{id}',[KirimController::class,'detail']);

//Fitur Beli Pulsa
Route::get('pulsa',[PulsaController::class,'index']);
Route::get('pulsa/{id}',[PulsaController::class,'beliPulsa']);
Route::post('pulsa/{id}',[PulsaController::class,'pesan']);
Route::get('pulsa/bayar/{id}',[PulsaController::class,'pembayaran']);
Route::post('pulsa/bayar/{id}',[PulsaController::class,'bayar']);
Route::get('pulsa/rincian/{id}',[PulsaController::class,'rincian']);
Route::delete('pulsa/bayar/{id}',[PulsaController::class,'batal']);

// Fitur Topup
Route::get('topup',[TopupController::class,'index']);
Route::get('topup/dana',[TopupController::class,'dana']);
Route::get('topup/gopay',[TopupController::class,'gopay']);
Route::get('topup/ovo',[TopupController::class,'ovo']);
Route::get('topup/shopeepay',[TopupController::class,'shopeepay']);
Route::get('topup/bri',[TopupController::class,'bri']);
Route::get('topup/mandiri',[TopupController::class,'mandiri']);
Route::get('topup/bni',[TopupController::class,'bni']);
Route::get('topup/bca',[TopupController::class,'bca']);
Route::get('topup/other',[TopupController::class,'other']);
Route::get('topup/agen',[TopupController::class,'agen']);

// Fitur Riwayat Transaksi
Route::get('/riwayat',[RiwayatController::class,'index']);

// Fitur Profile Settings
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/password',[ProfileController::class,'password'])->name('profile.password');
Route::patch('/password/{id}', [ProfileController::class, 'changepassword'])->name('profile.changepassword');

// Fitur CRUD Admin Area
Route::resource('user', UserController::class);
Route::resource('wallet', WalletController::class);