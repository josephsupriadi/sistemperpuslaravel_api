<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\RakController;
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

Route::get('book', [BukuController::class, 'index']);
Route::post('book/store', [BukuController::class, 'store']);
Route::get('rak', [RakController::class, 'index']);
Route::post('rak/store', [RakController::class, 'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
