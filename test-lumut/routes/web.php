<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;

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

Route::get('/', [LoginController::class,'showLoginForm']);
Route::post('/login',[ LoginController::class,'login'])->name('login');
Route::get('/logout',[ LoginController::class,'logout'])->name('logout');

Route::resource('posts', PostController::class);
Route::resource('home',HomeController::class);

Route::group(['middleware' => 'role:admin'], function () {
    Route::resource('accounts', AccountController::class);
});

