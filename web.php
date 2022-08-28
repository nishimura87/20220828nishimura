<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('/', [formController::class, 'index']);
Route::post('/', [formController::class, 'post']);
Route::post('/', [formController::class, 'create']);