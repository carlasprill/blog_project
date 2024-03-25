<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', [PostController2::class, 'index']);


Route::resource( 'categories', CategoryController::class);