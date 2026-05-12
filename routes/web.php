<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\view;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'get_products']);

Route::get('/store', [ProductController::class, 'add_product']);

Route::post('/store', [ProductController::class, 'store_product']);

Route::get('/delete_product/{item}', [ProductController::class, 'delete_product']);

Route::get('/edit_product/{item}/edit', [ProductController::class, 'edit_product']);

Route::put('/update_product/{item}', [ProductController::class, 'update_product']);
