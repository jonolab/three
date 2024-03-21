<?php

use App\Http\Controllers\CookingController;
use App\Http\Controllers\CookingRegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\IngredientRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
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

//Route::get('/user-register', [UserRegisterController::class, 'index']);
//Route::post('/user-register', [UserRegisterController::class, 'register']);
//Route::get('/user-register/confirm', [UserRegisterConfirmController::class, 'index']);
//Route::post('/user-register/confirm', [UserRegisterConfirmController::class, 'register']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/cooking', [CookingController::class, 'index']);
Route::get('/cooking/register', [CookingRegisterController::class, 'index']);
Route::post('/cooking/register', [CookingRegisterController::class, 'register']);
Route::get('/cooking/register/{id}', [CookingRegisterController::class, 'detail']);


Route::get('/master/ingredient', [IngredientController::class, 'index']);
Route::post('/master/ingredient/delete/{id}', [IngredientController::class, 'delete']);
Route::get('/master/ingredient/register', [IngredientRegisterController::class, 'index']);
Route::get('/master/ingredient/register/{id}', [IngredientRegisterController::class, 'detail']);
Route::post('/master/ingredient/register', [IngredientRegisterController::class, 'register']);

Route::get('/master/user', [UserController::class, 'index']);
Route::get('/master/user/register', [UserRegisterController::class, 'index']);
Route::get('/master/user/register/{id}', [UserRegisterController::class, 'detail']);
Route::post('/master/user/register', [UserRegisterController::class, 'register']);

