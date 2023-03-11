<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestitorController;
use App\Http\Controllers\InvesticijaController;
use App\Http\Controllers\AuthController;

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
Route::post('register', [AuthController::class, 'register']);

Route::post('login', [AuthController::class, 'login']);

Route::get('investitor', [InvestitorController::class, 'index']);

Route::get('investitor/{investitor}', [InvestitorController::class, 'show']);

Route::get('investicija', [InvesticijaController::class, 'index']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::put('investitor/{investitor}', [InvestitorController::class, 'update']);
    Route::delete('investitor/{investitor}', [InvestitorController::class, 'destroy']);
    Route::delete('investicija/{investicija}', [InvesticijaController::class, 'destroy']);

    Route::post('logout', [AuthController::class, 'logout']);
});
