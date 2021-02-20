<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;

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

Route::get('/', [OwnerController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::group(["prefix" => "owners"], function () {
    // add *above* route with URL parameter
    // otherwise 'create' will get included in that
    Route::get('create', [OwnerController::class, "create"]);
    Route::post('create', [OwnerController::class, "createPost"]);
    Route::get('update', [OwnerController::class, "update"]);
    Route::post('update', [OwnerController::class, "updatePost"]);
    Route::get('{owner}', [OwnerController::class, "show"]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
