<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ProductController;
use App\Http\Controllers\client\DashboardController;
use App\Http\Controllers\client\AboutController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\CheckoutController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\AuthController;
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
Route::get('/login', [AuthController::class, 'login'])->name('client.auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('client.auth.register');

Route::get('/', [HomeController::class, 'index'])->name('client.home.index');
Route::get('/product', [ProductController::class, 'index'])->name('client.product.index');
Route::get('/product/{slug}', [ProductController::class, 'detail'])->name('client.product.detail');
Route::get('/product/test', [ProductController::class, 'test'])->name('client.product.test');


Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('client.dashboard.index');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('client.dashboard.profile');
    Route::get('/order', [DashboardController::class, 'order'])->name('client.dashboard.order');
});
Route::get('/about', [AboutController::class, 'index'])->name('client.about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('client.contact.index');
Route::prefix('/checkout')->group(function (){
    Route::get('/', [CheckoutController::class, 'index'])->name('client.checkout.index');
    Route::post('/store', [CheckoutController::class, 'store'])->name('client.checkout.store');
    Route::post('/vnpay', [CheckoutController::class, 'vnpay'])->name('client.checkout.vnpay');
    Route::get('/order-confirmation', [CheckoutController::class, 'comfirmPayment'])->name('client.checkout.order-confirmation');
    Route::get('/test-mail', [CheckoutController::class, 'testMail'])->name('client.checkout.test-mail');
});
Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('client.cart.index');
    Route::post('/add', [CartController::class, 'store'])->name('client.cart.add');
    Route::patch('/update', [CartController::class, 'update'])->name('client.cart.update');
    Route::delete('/remove', [CartController::class, 'remove'])->name('client.cart.remove');
});

