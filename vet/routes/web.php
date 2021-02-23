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

Route::get('/', [HomeController::class, 'index']);

Route::group(["prefix" => "owners"], function () {

    Route::get('/all', [OwnerController::class, 'index']);
    Route::get('{owner}/show', [OwnerController::class, "show"]);

    Route::group(["middleware" => "auth"], function () {
        Route::get('create', [OwnerController::class, "create"]);
        Route::post('create', [OwnerController::class, "createPost"]);
        Route::get('{owner}/update', [OwnerController::class, "update"]);
        Route::post('{owner}/update', [OwnerController::class, "updatePost"]);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
