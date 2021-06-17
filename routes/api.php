<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\GamesController;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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


Route::post('usuario',[GamesController::class,"store"]);
Route::post('update',[GamesController::class,"updateUser"]);
Route::post('updateGame',[GamesController::class,"updateGame"]);
Route::post('getGame',[GamesController::class,"getGame"]);

