<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

//التصنيف
Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [CategoryController::class, 'edit'])->name('edit');
    Route::any('/update/{product}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{product}', [CategoryController::class, 'destroy'])->name('delete');
    Route::get('/show/{product}', [CategoryController::class, 'show'])->name('show');
});
//المنتج
Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
    Route::get('/index', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::any('/update/{product}', [ProductController::class, 'update'])->name('update');
    Route::get('/delete/{product}', [ProductController::class, 'destroy'])->name('delete');
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('show');
});

