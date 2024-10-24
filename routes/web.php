<?php

use App\Http\Controllers\ProductController;



Route::get('/saludo',[ProductController::class,'saludo']);

Route::get('/create',[ProductController::class,'create']);

Route::post('/store',[ProductController::class,'store'])->name('store');