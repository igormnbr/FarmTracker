<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmController;

Route::get('/', [FarmController::class, 'index']);

Route::get('/create', [FarmController::class, 'create']);

Route::get('/show', [FarmController::class, 'show']);

Route::post('/farms', [FarmController::class, 'store']);

Route::get('/dashboard', [FarmController:: class, 'dashboard'])->middleware('auth');

Route::delete('/farms/{id}', [FarmController:: class, 'destroy'])->middleware('auth');

Route::get('/farms/edit/{id}', [FarmController:: class, 'edit'])->middleware('auth');

Route::put('/farms/update/{id}', [FarmController:: class, 'update'])->middleware('auth');
