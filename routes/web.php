<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DataController;

Route::get('/data/create', [DataController::class, 'create']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/', [DataController::class, 'master']);


Route::get('/data', [DataController::class, 'index']);
Route::post('/data', [DataController::class, 'store']);
Route::get('/data/{id}', [DataController::class, 'destroy']);
Route::get('/data/{id}/edit', [DataController::class, 'edit']);
Route::put('/data/{id}', [DataController::class, 'update']);