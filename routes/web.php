<?php

use App\Http\Controllers\sesicontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


    Route::get('/',[sesicontroller::class, 'index']);
    Route::post('/',[sesicontroller::class, 'login']);



    Route::get('/admin',[sesicontroller::class, 'index']);

    Route::resource('/posts', \App\Http\Controllers\PostController::class);
