<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PenyakitController;
use App\Http\Controllers\Api\RamuanController;
use App\Http\Controllers\Api\TumbuhanController;
use App\Http\Controllers\Api\CaraMengolahController;

Route::get('/penyakits', [PenyakitController::class, 'index']);
Route::get('/penyakits/{id}', [PenyakitController::class, 'show']);

Route::get('/ramuans', [RamuanController::class, 'index']);
Route::get('/ramuans/{id}', [RamuanController::class, 'show']);

Route::get('/tumbuhans', [TumbuhanController::class, 'index']);
Route::get('/tumbuhans/{id}', [TumbuhanController::class, 'show']);

Route::get('/cara-mengolah', [CaraMengolahController::class, 'index']);
Route::get('/cara-mengolah/{id}', [CaraMengolahController::class, 'show']);
