<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

/* Authenticate */
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {

  /* Application */

  /* Authenticate */
  Route::post('logout', [AuthController::class, 'logout']);

  /* City */
  Route::get('city', [CityController::class, 'index']);
  Route::post('city', [CityController::class, 'store']);
  Route::get('city/{id}', [CityController::class, 'show']);

  /* Country */
  Route::get('country', [CountryController::class, 'index']);
  Route::post('country', [CountryController::class, 'store']);
  Route::get('country/{id}', [CountryController::class, 'show']);

  /* Document */

  /* Image */

  /* Parking */

  /* Person */

  /* Rol */

  /* User */
  Route::get('user', [UserController::class, 'index']);
  Route::get('user/{id}', [UserController::class, 'show']);
  Route::put('user/{id}', [UserController::class, 'update']);
  Route::delete('user/{id}', [UserController::class, 'destroy']);
});
