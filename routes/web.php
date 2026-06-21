<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;


Route::get('/', [LandingController::class, 'index']);


Route::resource('admin', JadwalController::class);



Route::get('/storage/{filename}', function ($filename) {

    $path = storage_path('app/public/'.$filename);


    if (!file_exists($path)) {

        abort(404);

    }


    return Response::file($path);


})->where('filename', '.*');