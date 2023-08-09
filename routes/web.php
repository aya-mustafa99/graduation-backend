<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardController;
use  App\Http\Controllers\admin\categoryController;
use  App\Http\Controllers\postController;


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
Route::get('qb', [db::class,'queryb']);




Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::resource('category', categoryController::class);
Route::resource('post', postController::class);




//localization 
//Route::get("locale/{lang}",localizationcontroller::class,'setlang');