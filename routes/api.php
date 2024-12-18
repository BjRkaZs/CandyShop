<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandyController;
use App\Http\Controllers\TypeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get( "/candies", [ CandyController::class, "getCandies" ]);
Route::delete( "/candy", [ CandyController::class, "destroyCandy" ]);
Route::post( "/newcandy", [ CandyController::class, "newCandy" ]);


Route::post( "/newtype", [ TypeController::class, "newType" ]);
