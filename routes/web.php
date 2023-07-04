<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\DashboardController;
use App\Http\Controllers\client\AboutController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\CartController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [HomeController::class, 'index'])->name('client.home.index');
Route::get('/product', [ProductController::class, 'index'])->name('client.product.index');
Route::get('/product/detail', [ProductController::class, 'detail'])->name('client.product.detail');
Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('client.dashboard.index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('client.dashboard.profile');
    Route::get('/order', [DashboardController::class, 'order'])->name('client.dashboard.order');
});
Route::get('/about', [AboutController::class, 'index'])->name('client.about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('client.contact.index');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('client.checkout.index');
Route::get('/cart', [CartController::class, 'index'])->name('client.cart.index');

