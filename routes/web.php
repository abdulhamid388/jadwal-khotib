<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/

Route::get('/', [
    LandingController::class,
    'index'
]);





/*
|--------------------------------------------------------------------------
| Halaman Admin
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::resource(
        'admin',
        JadwalController::class
    );
});





/*
|--------------------------------------------------------------------------
| Foto Storage
|--------------------------------------------------------------------------
*/

Route::get('/storage/{filename}', function ($filename) {


    $path = storage_path('app/public/'.$filename);



    if (!file_exists($path)) {

        abort(404);

    }



    return Response::file($path);



})->where('filename','.*');