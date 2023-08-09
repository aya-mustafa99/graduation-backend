<?php

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

Route::get('/categories', [categoryController::class, 'index']);
Route::get('/categories/{id}', [categoryController::class, 'show']);
Route::get('/plants', [PlantController::class, 'index']);
Route::get('/plants/{id}', [PlantController::class, 'show']);
Route::get('/plants/by-category/{categoryId}', [PlantController::class, 'getByCategoryId']);
