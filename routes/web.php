<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\Api\V1\AuthController;

Route::get('/', function () {    
    return view('home');
});

Route::get('/{code}', [UrlController::class, 'redirect']); // Public route for redirection