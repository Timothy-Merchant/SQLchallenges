<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\API\OwnerController;
use App\http\controllers\API\Owners\AnimalController;
use App\http\controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users/all', [UserController::class, "index"]);
Route::get('/users/{owner}', [UserController::class, "show"]);
Route::post('/users/create', [UserController::class, "store"]);
Route::put('/users/update/{owner}', [UserController::class, "update"]);
Route::delete('/users/{owner}', [UserController::class, "destroy"]);

Route::group(["prefix" => "owners"], function () {
    Route::get("all", [OwnerController::class, "index"]);
    Route::post("create", [OwnerController::class, "store"]);

    Route::group(["prefix" => "{owner}"], function () {
        Route::get("show", [OwnerController::class, "show"]);
        Route::put("update", [OwnerController::class, "update"]);
        Route::delete("destroy", [OwnerController::class, "destroy"]);

        Route::group(["prefix" => "animals"], function () {
            Route::get("all", [AnimalController::class, "index"]);
            Route::post("create", [AnimalController::class, "store"]);

            Route::group(["prefix" => "{animal}"], function () {
                Route::get("show", [AnimalController::class, "show"]);
                Route::put("update", [AnimalController::class, "update"]);
                Route::delete("destroy", [AnimalController::class, "destroy"]);
            });
        });
    });
});
