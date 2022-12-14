<?php

use App\Http\Controllers\CharactersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\GroupsController;
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

Route::get('/', function () { return redirect('characters' );});

Route::get('register', [RegisterController::class, 'register']);

Route::post('confirmregister', [RegisterController::class, 'confirmregister'])->name('confirmregister');

Route::get('login', [LoginController::class, 'login']);

Route::post('confirmlogin', [LoginController::class, 'confirmlogin'])->name('confirmlogin');

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::resource('characters', CharactersController::class);

Route::resource('groups', GroupsController::class);

Route::post('characters.show', [CharactersController::class, 'levelup'])->name('levelup');
