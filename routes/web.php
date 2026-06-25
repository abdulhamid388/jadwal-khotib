<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';



/*
|--------------------------------------------------------------------------
| LANDING / HALAMAN PUBLIK
|--------------------------------------------------------------------------
*/

Route::get('/', [
    LandingController::class,
    'index'
])->name('home');





/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    return view('dashboard');

})->middleware(['auth'])->name('dashboard');






/*
|--------------------------------------------------------------------------
| ADMIN JADWAL KHOTIB
|--------------------------------------------------------------------------
*/


Route::middleware(['auth'])
->prefix('admin')
->name('admin.')
->group(function () {


    Route::resource(
        'jadwal',
        JadwalController::class
    );


});






/*
|--------------------------------------------------------------------------
| STORAGE FOTO
|--------------------------------------------------------------------------
*/


Route::get('/storage/{filename}', function ($filename) {


    $path = storage_path(
        'app/public/'.$filename
    );



    if(!file_exists($path)){

        abort(404);

    }



    return Response::file($path);



})
->where('filename','.*');
