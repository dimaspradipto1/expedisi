<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\KecamatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\PerusahaanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'index'])->name('/');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/admin', [LoginController::class, 'admin'])->name('admin');
    Route::resource('status', StatusController::class);
    Route::resource('kelurahan', KelurahanController::class);
    Route::resource('kecamatan', KecamatanController::class);
    Route::resource('pengiriman', PengirimanController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('perusahaan', PerusahaanController::class);
    Route::resource('jenisbarang', JenisBarangController::class);
});
