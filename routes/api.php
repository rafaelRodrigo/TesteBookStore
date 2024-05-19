<?php

use App\Http\Controllers\API\ApiController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StoreBookController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/***** API ROUTES ******/
Route::post("login", [ApiController::class,"login"]);

/***** API AUTH ******/
Route::group([
    "middleware" => ["auth:api"]
],function(){

    /***** USER ******/
    Route::controller(UserController::class)->group(function () {
        Route::get("/user", "getAll");
        Route::get("/user/{id}", "get");
        Route::post("/user", "post");
        Route::put("/user/{id}", "put");
        Route::delete("/user/{id}","delete");
    });

    /***** STORE ******/
    Route::controller(StoreController::class)->group(function () {
        Route::get("/store", "getAll");
        Route::get("/store/{id}", "get");
        Route::post("/store", "post");
        Route::put("/store/{id}", "put");
        Route::delete("/store/{id}","delete");
    });

    /***** BOOK ******/
    Route::controller(BookController::class)->group(function () {
        Route::get("/book", "getAll");
        Route::get("/book/{id}", "get");
        Route::post("/book", "post");
        Route::put("/book/{id}", "put");
        Route::delete("/book/{id}","delete");
    });

    /***** BOOK ******/
    Route::controller(StoreBookController::class)->group(function () {
        Route::get("/storesbook", "getAll");
        Route::get("/storesbook/{id}", "get");
        Route::post("/storesbook", "post");
        Route::put("/storesbook/{id}", "put");
        Route::delete("/storesbook/{id}","delete");
    });


});
