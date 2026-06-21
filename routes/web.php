<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;



Route::get('/', [
    LandingController::class,
    'index'
]);



Route::resource(
    'admin',
    JadwalController::class
);