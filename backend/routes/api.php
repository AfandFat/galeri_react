<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AlbumController;
use App\Http\Controllers\Api\UserController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('albums', [AlbumController::class, 'index']);
Route::post('albums', [AlbumController::class, 'store']);
Route::get('albums/{id}', [AlbumController::class, 'show']);
Route::get('albums/{id}/edit', [AlbumController::class, 'edit']);
Route::put('albums/{id}/edit', [AlbumController::class, 'update']);
Route::delete('albums/{id}/delete', [AlbumController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::get('users/{id}/edit', [UserController::class, 'edit']);
Route::put('users/{id}/edit', [UserController::class, 'update']);
Route::delete('users/{id}/delete', [UserController::class, 'destroy']);
