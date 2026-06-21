<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;


/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/

Route::get('/', [
    LandingController::class,
    'index'
])->name('landing');



/*
|--------------------------------------------------------------------------
| Admin Jadwal CRUD
|--------------------------------------------------------------------------
*/

Route::resource(
    'admin',
    JadwalController::class
);