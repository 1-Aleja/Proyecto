<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'getinventary'])->name('shop');
Route::get('/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'getreference'])->name('reference');
Route::get('/toy/edit/{id}', [App\Http\Controllers\EditController::class, 'update'])->name('update');
Route::get('/create-toy/insert', [App\Http\Controllers\InventaryController::class, 'store'])->name('edit');
Route::get('/create-toy', [App\Http\Controllers\ToyController::class, 'create'])->name('create-toy');
Route::get('/toy/{id}', [App\Http\Controllers\ToyController::class, 'gettoy'])->name('toy');
Route::get('/listuser', [App\Http\Controllers\ListUserController::class, 'listuser'])->name('listuser');
Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('store');


