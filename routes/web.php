<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HistoryController;

Route::fallback([ProductController::class,'index_home']);
Route::get('/home', [ProductController::class,'index_home'])->name('home');
Route::get('/about-us', [ProductController::class,'index_about'])->name('aboutus');
Route::get('/our-product', [ProductController::class,'index'])->name('ourproduct');
Route::get('/contact-us', [ProductController::class,'index_contact'])->name('contactus');
Route::get('/product-detail/{id}', [ProductController::class, 'product_detail'])->name('productdetail');

Route::middleware('AdminAndMemberOnly')->group(function () {
    Route::get('/edit-profile', [UserController::class,'update_page'])->name('editprofile');
    Route::post('/edit-profile', [UserController::class,'update'])->name('editprofileLogic');
    Route::post('/logout',[UserController::class,'logout'])->name('logout');
});

Route::middleware('AdminOnly')->group(function () {
    Route::get('/add-product', [ProductController::class,'create_page'])->name('addproduct');
    Route::post('/add-product', [ProductController::class,'create'])->name('addproductLogic');
    Route::get('/edit-product/{id}', [ProductController::class,'edit'])->name('editproduct');
    Route::post('/edit-product/{id}', [ProductController::class,'update'])->name('editproductLogic');
    Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
});

Route::middleware('MemberOnly')->group(function () {
    Route::post('/add-item/{id}', [ItemController::class, 'addItemToCart'])->name('addItemToCart');
    Route::delete('/cart/{id}',[ItemController::class,'removeItem'])->name('removeitem');
    Route::get('/cart', [CartController::class, 'cart_page'])->name('cart');
    Route::get('/checkout/{id}/{total}',[HistoryController::class,'checkout'])->name('checkout');
    Route::get('/transaction-history',[HistoryController::class,'viewTransaction'])->name('transaction');
    Route::get('/history',[HistoryController::class,'viewTransaction'])->name('history');
});

Route::middleware('GuestOnly')->group(function () {
    Route::get('/login',[UserController::class,'index_login'])->name('index_login');
    Route::get('/register',[UserController::class,'index_register'])->name('index_register');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::post('/register',[UserController::class,'register'])->name('register');
});
