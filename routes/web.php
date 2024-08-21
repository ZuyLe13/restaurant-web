<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\MenusController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FoodsController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::resource('menus', MenusController::class);
