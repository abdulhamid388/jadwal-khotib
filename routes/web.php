<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/
Route::get('/', [LandingController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Admin CRUD
|--------------------------------------------------------------------------
*/
Route::resource('admin', JadwalController::class);