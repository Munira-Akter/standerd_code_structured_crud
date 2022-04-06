<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('category',[App\Http\Controllers\CategoryController::class,'categoryShow'])->name('category.show');
Route::get('add/category',[App\Http\Controllers\CategoryController::class,'categoryAdd'])->name('category.add');

Route::get('product',[App\Http\Controllers\ProductController::class,'productShow'])->name('product.show');
Route::get('add/product',[App\Http\Controllers\ProductController::class,'productAdd'])->name('product.add');

