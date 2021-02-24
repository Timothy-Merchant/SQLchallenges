<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AnimalController;
use App\Http\Middleware\EnsureOwnerIsValid;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something greatow
*/

Auth::routes(['register' => false]);

Route::get('/', [HomeController::class, 'index']);

Route::group(["prefix" => "owners"], function () {
    Route::get("", [OwnerController::class, "index"]);
    Route::post("create", [OwnerController::class, "store"]);

    Route::group(["prefix" => "{owner}"], function () {
        Route::get("", [OwnerController::class, "show"]);
        Route::get("update", [OwnerController::class, "update"]);
        Route::post("update", [OwnerController::class, "updatePost"]);
        Route::get("destroy", [OwnerController::class, "destroy"]);
        
        Route::group(["prefix" => "animals"], function () {
            Route::get("", [AnimalController::class, "index"]);
            Route::get("create", [AnimalController::class, "create"]);
            Route::post("create", [AnimalController::class, "createPost"]);

            Route::group(["prefix" => "{animal}", "middleware" => EnsureOwnerIsValid::class], function () {
                Route::get("", [AnimalController::class, "show"]);
                Route::put("update", [AnimalController::class, "update"]);
                Route::get("destroy", [AnimalController::class, "destroy"]);
            });
        });
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
