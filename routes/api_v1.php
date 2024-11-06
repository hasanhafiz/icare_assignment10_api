<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\PostController;

// Route::get('/hasan', function(){
//    return 'API'; 
// });

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/generate-short-url', [UrlController::class, 'createShortUrl'])->middleware('auth:sanctum');
Route::get('/urls', [UrlController::class, 'getUrls'])->middleware('auth:sanctum');

// Route::apiResource('/posts', PostController::class); 
// Route::apiResource('/categories', CategoryController::class); 