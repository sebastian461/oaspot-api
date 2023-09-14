<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RolController;
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
  Route::get('application', [ApplicationController::class, 'index']);
  Route::post('application', [ApplicationController::class, 'store']);
  Route::get('application/{id}', [ApplicationController::class, 'show']);
  Route::put('application/{id}', [ApplicationController::class, 'update']);
  Route::delete('application/{id}', [ApplicationController::class, 'destroy']);

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
  Route::get('document', [DocumentController::class, 'index']);
  Route::post('document', [DocumentController::class, 'store']);
  Route::delete('document/{id}', [DocumentController::class, 'destroy']);

  /* Image */
  Route::get('image', [ImageController::class, 'index']);
  Route::post('image', [ImageController::class, 'store']);
  Route::get('image/{id}', [ImageController::class, 'show']);
  Route::delete('image/{id}', [ImageController::class, 'destroy']);

  /* Parking */
  Route::get('parking', [ParkingController::class, 'index']);
  Route::post('parking', [ParkingController::class, 'store']);
  Route::get('parking/{id}', [ParkingController::class, 'show']);
  Route::put('parking/{id}', [ParkingController::class, 'update']);
  Route::delete('parking/{id}', [ParkingController::class, 'destroy']);

  /* Person */
  Route::get('person', [PersonController::class, 'index']);
  Route::post('person', [PersonController::class, 'store']);
  Route::get('person/{id}', [PersonController::class, 'show']);
  Route::put('person/{id}', [PersonController::class, 'update']);
  Route::delete('person/{id}', [PersonController::class, 'destroy']);

  /* Rol */
  Route::get('rol', [RolController::class, 'index']);
  Route::post('rol', [RolController::class, 'store']);
  Route::get('rol/{id}', [RolController::class, 'show']);
  Route::put('rol/{id}', [RolController::class, 'update']);

  /* User */
  Route::get('user', [UserController::class, 'index']);
  Route::get('user/{id}', [UserController::class, 'show']);
  Route::put('user/{id}', [UserController::class, 'update']);
  Route::delete('user/{id}', [UserController::class, 'destroy']);
});
