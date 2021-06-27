<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataApiController;

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
Route::get('/', [DataApiController::class, 'index']);
Route::get('/{id}', [DataApiController::class, 'show']);
Route::post('/', [DataApiController::class, 'store']);
Route::get('/data/{id}', [DataApiController::class, 'destroy']);

