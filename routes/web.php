<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\defaultFormController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\transactionController;
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

// ========== Hanya Awal ====================== 
Route::get('', function () {
    return redirect()->route('dashboard');
});
Route::get('dashboard', [defaultFormController::class, 'dashboard'])->name('dashboard');
// ========== Hanya Awal ======================

// ========== Auth ============================
Route::get('login', [authController::class, 'login'])->name('login');
Route::post('login', [authController::class, 'authLogin'])->name('auth.login');
Route::get('register', [authController::class, 'register'])->name('register');
Route::post('register', [authController::class, 'authRegister'])->name('auth.register');
Route::get('logout', [authController::class, 'logout'])->name('logout');
// ========== Auth ============================

// ========== Profile =========================
Route::get('profile', [defaultFormController::class, 'myProfile'])->name('my.profile');
// ========== Profile =========================

// ========== Markets =========================
Route::get('my-stores', [ShopsController::class, 'myStores'])->name('my.stores');
// ========== Markets =========================

// ========== Products ========================
// ========== Feture + ========================
Route::get('product/nama', [productController::class, 'detail'])->name('product.detail');
Route::get('products', [defaultFormController::class, 'products'])->name('products');
// ========== Products ========================

// ========== Shopping Carts ==================
Route::get('shopping-cart', [cartController::class, 'index'])->name('shopping.cart');
Route::post('cart', [cartController::class, 'store'])->name('cart.store');
Route::delete('cart', [cartController::class, 'delete'])->name('cart.delete');
// ========== Shopping Carts ==================

// ========== Transaction =====================
Route::get('transaction', [transactionController::class, 'index'])->name('transaction');
Route::post('transaction/create', [transactionController::class, 'create'])->name('transaction.create');
// ========== Transaction =====================

// ========== Settings ========================
Route::get('setting', [defaultFormController::class, 'setting'])->name('setting');
// ========== Settings ========================

// ========== Mails ===========================
Route::get('mail', function() {
    return view('mails.verification-email');
});
// ========== Mails ===========================
