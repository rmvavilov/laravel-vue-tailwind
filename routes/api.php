<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreenController;
use App\Http\Controllers\GridController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/screen', [ScreenController::class, 'loadScreen']);
Route::post('/records', [ScreenController::class, 'getRecords']);

Route::post('/grid', [GridController::class, 'getGridState']);
Route::post('/grid/click', [GridController::class, 'handleSquareClick']);
