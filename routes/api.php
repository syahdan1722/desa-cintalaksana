<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Api\WisataApiController;
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

Route::apiResource('berita', BeritaController::class);
Route::get('/beritas', [BeritaController::class, 'index']);
Route::apiResource('beritas', BeritaController::class);
Route::get('/beritas', [BeritaController::class, 'index']);
Route::get('/beritas/{id}', [BeritaController::class, 'show']);
Route::post('/beritas', [BeritaController::class, 'store']);
Route::put('/beritas/{id}', [BeritaController::class, 'update']);
Route::delete('/beritas/{id}', [BeritaController::class, 'destroy']);
