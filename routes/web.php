<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IngredientRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterConfirmController;
use App\Http\Controllers\UserRegisterController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/user-register', [UserRegisterController::class, 'index']);
Route::post('/user-register', [UserRegisterController::class, 'register']);
Route::get('/user-register/confirm', [UserRegisterConfirmController::class, 'index']);
Route::post('/user-register/confirm', [UserRegisterConfirmController::class, 'register']);

Route::get('/master/ingredient/register', [IngredientRegisterController::class, 'index']);
