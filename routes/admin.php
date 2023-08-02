<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CouponController;
use App\Http\Controllers\admin\AttributeController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\UserController;
//Route::get('/admin', function () {
//    return redirect(route('admin.auth.login'));
//});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'adminLogin'])->name('admin.auth.login');
    Route::post('/callback', [AuthController::class, 'adminCheck'])->name('admin.auth.check');
});

Route::any('/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware('auth.admin')->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

Route::prefix('category')->middleware('role_super_admin')->group(function () {
    Route::get('/add', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/update', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/{id}/destroy', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::get('/list', [CategoryController::class, 'index'])->name('admin.category.show');
});

Route::prefix('product')->middleware('role_super_admin')->group(function () {
    Route::get('/add', [ProductController::class, 'create'])->name('admin.product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    Route::get('/list', [ProductController::class, 'index'])->name('admin.product.show');
    Route::post('/un-hot/{id}', [ProductController::class, 'un_hot'])->name('admin.product.un.hot');
    Route::post('/re-hot/{id}', [ProductController::class, 're_hot'])->name('admin.product.re.hot');
    Route::post('/un-status/{id}', [ProductController::class, 'un_status'])->name('admin.product.un.status');
    Route::post('/re-status/{id}', [ProductController::class, 're_status'])->name('admin.product.re.status');
    Route::prefix('detail')->group(function (){
        Route::get('/{id}', [ProductController::class, 'detail'])->name('admin.product.detail.show');
        Route::get('/{id}/add', [ProductController::class, 'detailCreate'])->name('admin.product.detail.create');
        Route::post('/{id}/store', [ProductController::class, 'detailStore'])->name('admin.product.detail.store');
        Route::get('/{id}/edit', [ProductController::class, 'detailEdit'])->name('admin.product.detail.edit');
        Route::put('/{id}/update', [ProductController::class, 'detailUpdate'])->name('admin.product.detail.update');
        Route::delete('/{id}/destroy', [ProductController::class, 'detailDestroy'])->name('admin.product.detail.destroy');
    });
});

Route::prefix('coupon')->middleware('role_super_admin')->group(function (){
   Route::get('/list', [CouponController::class, 'index'])->name('admin.coupon.show');
    Route::get('/add', [CouponController::class, 'create'])->name('admin.coupon.create');
    Route::post('/store', [CouponController::class, 'store'])->name('admin.coupon.store');
    Route::get('/{id}/edit', [CouponController::class, 'edit'])->name('admin.coupon.edit');
    Route::put('/update/{id}', [CouponController::class, 'update'])->name('admin.coupon.update');
    Route::delete('/{id}/destroy', [CouponController::class, 'destroy'])->name('admin.coupon.destroy');
    Route::post('/un-status/{id}', [CouponController::class, 'un_status'])->name('admin.coupon.un.status');
    Route::post('/re-status/{id}', [CouponController::class, 're_status'])->name('admin.coupon.re.status');
});

Route::prefix('attribute')->middleware('role_staff')->group(function (){
    Route::prefix('size')->group(function (){
        Route::post('/',[AttributeController::class, 'sizeAdd'])->name('admin.size.add');
        Route::put('/{id}',[AttributeController::class, 'sizeEdit'])->name('admin.banner.edit');
    });
    Route::prefix('color')->group(function (){
        Route::post('/',[AttributeController::class, 'colorAdd'])->name('admin.color.add');
        Route::put('/{id}',[AttributeController::class, 'colorEdit'])->name('admin.banner.edit');
    });
    Route::prefix('banner')->group(function (){
        Route::post('/',[AttributeController::class, 'bannerAdd'])->name('admin.banner.add');
        Route::put('/{id}',[AttributeController::class, 'bannerEdit'])->name('admin.banner.edit');
    });
    Route::get('/list', [AttributeController::class, 'index'])->name('admin.attribute.show');
    Route::get('/add', [AttributeController::class, 'create'])->name('admin.attribute.create');
    Route::get('/{id}/edit', [AttributeController::class, 'edit'])->name('admin.attribute.edit');
    Route::delete('/{id}/destroy', [AttributeController::class, 'destroy'])->name('admin.attribute.destroy');
});

Route::prefix('order')->middleware('role_staff')->group(function (){
    Route::get('/list', [OrderController::class, 'index'])->name('admin.order.show');
    Route::get('/add', [OrderController::class, 'create'])->name('admin.order.create');
    Route::post('/detail', [OrderController::class, 'detail'])->name('admin.attribute.detail');
    Route::put('/status/{id}', [OrderController::class, 'status'])->name('admin.order.status');
    Route::delete('/{id}/destroy', [OrderController::class, 'destroy'])->name('admin.order.destroy');
});

Route::prefix('user')->group(function (){
    Route::get('/list', [UserController::class, 'index'])->name('admin.user.show');
    Route::get('/add', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
    Route::get('/detail', [UserController::class, 'edit'])->name('admin.user.edit');
    Route::put('/update', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('/{id}/destroy', [UserController::class, 'destroy'])->name('admin.user.destroy');
    Route::post('/role/{id}', [UserController::class, 'role'])->name('admin.user.role');
});
});
