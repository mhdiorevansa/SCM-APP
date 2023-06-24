<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SayurController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SayurMasukController;
use App\Http\Controllers\SayurKeluarController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/myProfile', [profileController::class, 'index'])->middleware('auth');

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->middleware('auth');

Route::get('/sayur', [SayurController::class, 'allSayur'])->middleware('auth');
Route::get('/control-sayur', [SayurController::class, 'controlSayur'])->middleware('auth');
Route::get('/tambah-sayur', [SayurController::class, 'createSayur'])->middleware(['auth', 'adminMiddleware']);
Route::post('/tambah-sayur', [SayurController::class, 'storeSayur'])->middleware(['auth', 'adminMiddleware']);
Route::delete('/destroy-sayur/{id}', [SayurController::class, 'destroySayur'])->middleware(['auth', 'adminMiddleware']);
Route::get('/edit-sayur/{id}', [SayurController::class, 'editSayur'])->middleware(['auth', 'adminMiddleware']);
Route::put('/edit-sayur/{id}', [SayurController::class, 'updateSayur'])->middleware(['auth', 'adminMiddleware']);

Route::get('/supplier', [SupplierController::class, 'allSupplier'])->middleware('auth');
Route::get('/control-supplier', [SupplierController::class, 'controlSupplier'])->middleware('auth');
Route::get('/tambah-supplier', [SupplierController::class, 'createSupplier'])->middleware(['auth', 'adminMiddleware']);
Route::post('/tambah-supplier', [SupplierController::class, 'storeSupplier'])->middleware(['auth', 'adminMiddleware']);
Route::delete('/destroy-supplier/{id}', [SupplierController::class, 'destroySupplier'])->middleware(['auth', 'adminMiddleware']);
Route::get('/edit-supplier/{id}', [SupplierController::class, 'editSupplier'])->middleware(['auth', 'adminMiddleware']);
Route::put('/edit-supplier/{id}', [SupplierController::class, 'updateSupplier'])->middleware(['auth', 'adminMiddleware']);

Route::get('/sayur-masuk', [SayurMasukController::class, 'allSayurMasuk'])->middleware('auth');
Route::get('/tambah-sayur-masuk', [SayurMasukController::class, 'createSayurMasuk'])->middleware(['auth', 'gudangMiddleware']);
Route::post('/tambah-sayur-masuk', [SayurMasukController::class, 'storeSayurMasuk'])->middleware(['auth', 'gudangMiddleware']);

Route::get('/print-pdf-sayur-masuk', [PDFController::class, 'printSayurMasuk'])->middleware(['auth', 'adminMiddleware']);
Route::get('/print-pdf-sayur-keluar', [PDFController::class, 'printSayurKeluar'])->middleware(['auth', 'adminMiddleware']);

Route::get('/sayur-keluar', [SayurKeluarController::class, 'allSayurKeluar'])->middleware('auth');
Route::get('/tambah-sayur-keluar', [SayurKeluarController::class, 'createSayurKeluar'])->middleware(['auth', 'gudangMiddleware']);
Route::post('/tambah-sayur-keluar', [SayurKeluarController::class, 'storeSayurKeluar'])->middleware(['auth', 'gudangMiddleware']);
