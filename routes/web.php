<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KirimController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PulsaController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\TopupController;
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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/login', function () {
//     return view('auth/login');
// });

// Tampilan Awal
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/login', [HomeController::class,'login']);
Route::get('/dashboard',[HomeController::class,'dashboard']);

// Fitur Login
Route::post('/auth/login', [AuthController::class,'login']);
Route::get('/auth/logout', [AuthController::class,'logout']);
Route::get('/register', [AuthController::class,'register']);
Route::post('/auth/create', [AuthController::class,'create']);


//Fitur Kirim Saldo 
Route::get('/kirim',[KirimController::class,'index']);
Route::get('/tujuan',[KirimController::class,'tujuan']);
Route::get('/jumlahtrf',[KirimController::class,'jumlahtrf']);
Route::get('/rinciantrf',[KirimController::class,'rinciantrf']);
Route::get('/metodebayar',[KirimController::class,'metodebayar']);
Route::get('/sukses',[KirimController::class,'sukses']);

//Fitur Beli Pulsa
Route::get('/pulsa',[PulsaController::class,'index']);
Route::get('/pembayaran',[PulsaController::class,'pembayaran']);
Route::get('/rincian',[PulsaController::class,'rincian']);

// Fitur Topup
Route::get('/topup',[TopupController::class,'index']);
Route::get('/dana',[TopupController::class,'dana']);
Route::get('/gopay',[TopupController::class,'gopay']);
Route::get('/ovo',[TopupController::class,'ovo']);
Route::get('/shopeepay',[TopupController::class,'shopeepay']);
Route::get('/bri',[TopupController::class,'bri']);
Route::get('/mandiri',[TopupController::class,'mandiri']);
Route::get('/bni',[TopupController::class,'bni']);
Route::get('/bca',[TopupController::class,'bca']);
Route::get('/other',[TopupController::class,'other']);
Route::get('/agen',[TopupController::class,'agen']);

// Fitur Riwayat Transaksi
Route::get('/riwayat',[RiwayatController::class,'index']);

// Fitur Profile Settings

Route::get('/profile',[ProfileController::class,'index']);
Route::get('/password',[ProfileController::class,'password']);
// Route::resource('profile', ProfileController::class);
// Route::resource('user', ProfileController::class);
// Route::resource('users', ProfileController::class);

