<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\API\OwnerController;

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

Route::get('/owners/all', [OwnerController::class, "index"]);
Route::get('/owners/{owner}', [OwnerController::class, "show"]);
Route::post('/owners/create', [OwnerController::class, "store"]);
Route::put('/owners/update/{owner}', [OwnerController::class, "update"]);
Route::delete('/owners/{owner}', [OwnerController::class, "destroy"]);