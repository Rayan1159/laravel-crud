<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::prefix("/auth")->group(function(){
    /**
     * Get requests
     */
    Route::get("/login", [AuthenticationController::class, 'login']);
    Route::get("/register", [AuthenticationController::class, 'register']);

    /**
     * Post requests
     */
    Route::post("/login", [CrudController::class, 'login']);
    Route::post("/register", [CrudController::class, 'register']);
});

Route::prefix("/crud")->group(function() {
    Route::post("/login", [CrudController::class, 'login']);
});
