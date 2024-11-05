<?php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BanDeleteMethod;

Route::get('/', function () {
    
    // dd( User::all()  );
    return view('home');
});

// Route::delete('/delete', function(){
//     return 'Deleted';
// })->name('delete.orderno')->middleware(BanDeleteMethod::class);

// Route::get('/user', function( Request $request ){
//     return $request->user();
// })->middleware('auth:sanctum');

