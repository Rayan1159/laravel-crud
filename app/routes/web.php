<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::prefix("/auth")->group(function(){
    Route::get("/login", [AuthenticationController::class, 'login']);
    Route::get("/register", [AuthenticationController::class, 'register']);
});

Route::prefix("/crud")->group(function() {
    Route::post("/store", [CrudController::class, 'index']);
});