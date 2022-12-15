<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'tampilanLogin']);
Route::get('/register', [RegisterController::class, 'tampilanRegister']);
Route::post('authRegister', [RegisterController::class, 'saveRegister']);
Route::get('welcome', [WelcomeController::class, 'tampilanWelcome']);
Route::post('authLogin', [LoginController::class, 'processLogin']);
