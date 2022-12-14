<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\AuthController;

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

Route::resource('admin-product', ProductController::class);
Route::resource('admin-storage', StorageController::class);
Route::get('/admin-dashboard', [AdminController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/produk', [HomeController::class, 'produk']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/tentang-kami', [HomeController::class, 'tentang_kami']);
Route::get('/kontak-kami', [HomeController::class, 'kontak_kami']);
Route::get('/pembayaran', [HomeController::class, 'pembayaran']);
Route::get('/kebijakan', [HomeController::class, 'kebijakan']);
Route::get('/syarat', [HomeController::class, 'syarat']);
Route::get('/detail', [HomeController::class, 'detail']);
Route::get('/kategori', [HomeController::class, 'kategori']);