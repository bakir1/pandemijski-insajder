<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VakcineController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('vakcine', 'VakcineController');

Route::resource('vakcines', VakcineController::class);
