<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/users/first-type', [UserController::class, 'createUserFirstType']);
Route::post('/users/second-type', [UserController::class, 'createUserSecondType']);
Route::post('/users/third-type', [UserController::class, 'createUserThirdType']);


