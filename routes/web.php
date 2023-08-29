<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\ProdutoController::class, 'index']);
Route::resource('/produtos', \App\Http\Controllers\ProdutoController::class);

//Route::prefix('admin')->name('admin.')->group(function (){
//    Route::get('dashboard', function (){
//        return 'dashboard';
//    })->name('dashboard');
//
//    Route::get('users', function (){
//        return 'users';
//    })->name('users');
//
//    Route::get('clientes', function (){
//        return 'clientes';
//    })->name('clientes');
//});

//https://www.youtube.com/watch?v=8R-jluuasvM&list=PLwXQLZ3FdTVH5Tb57_-ll_r0VhNz9RrXb&index=42
