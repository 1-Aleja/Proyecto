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

Auth::routes(['register' => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'getinventary'])->name('shop');
Route::get('/reference/{id}', [App\Http\Controllers\ReferenceController::class, 'getreference'])->name('reference');
Route::get('/toy/edit/{id}', [App\Http\Controllers\EditController::class, 'update'])->name('update');
Route::post('/create-toy/insert', [App\Http\Controllers\InventaryController::class, 'store'])->name('create');
Route::get('/create-toy', [App\Http\Controllers\ToyController::class, 'create'])->name('create-toy');
Route::get('/toy/{id}', [App\Http\Controllers\ToyController::class, 'gettoy'])->name('toy');
Route::get('/list/user', [App\Http\Controllers\UserController::class, 'index'])->name('list');//listado
Route::get('/list/user/create', [App\Http\Controllers\UserController::class, 'deleteuser'])->name('form');//formulario
Route::post('/list/user/regist', [App\Http\Controllers\UserController::class, 'register'])->name('viewregister');//registro vista
Route::get('/list/registuser', [App\Http\Controllers\UserController::class, 'registeruser'])->name('registeruser');
Route::get('/edit/user', [App\Http\Controllers\UserController::class, 'edituser'])->name('edituser');//edita usuario


