<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('tasks',[TaskController::class, 'index']);
Route::get('tasks/{id}',[TaskController::class, 'find']);
Route::post('tasks',[TaskController::class, 'store']);
Route::put('tasks/{id}', [TaskController::class, 'update']);

