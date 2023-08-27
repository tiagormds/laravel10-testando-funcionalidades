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
