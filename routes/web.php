<?php

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

Route::get('/', [\App\Http\Controllers\loginTestController::class , 'login']);
Route::post('/', [\App\Http\Controllers\loginTestController::class, 'verifLogin']) ->name('/login');
Route::get('/singup', [\App\Http\Controllers\loginTestController::class, 'singUp'])->name('/inscript');
Route::post('/singup', [\App\Http\Controllers\loginTestController::class, 'insertSingUp'])->name('/insert');
Route::get('/succes', [\App\Http\Controllers\loginTestController::class, 'succes']);
Route::post('/succes', [\App\Http\Controllers\loginTestController::class, 'update'])->name('update');
Route::post('/logout', [\App\Http\Controllers\loginTestController::class, 'logout'])->name('logout');

