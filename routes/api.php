<?php

use App\Http\Controllers\Api\NumberController;
use Illuminate\Support\Facades\Route;

Route::post('/generate', [NumberController::class,'generate']);
Route::get('/retrieve/{id}', [NumberController::class,'retrieve']);