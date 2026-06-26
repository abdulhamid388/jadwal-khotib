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


})->middleware('auth')

->name('dashboard');









/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/


Route::middleware('auth')

->prefix('admin')

->name('admin.')

->group(function(){






    /*
    |--------------------------------------------------------------------------
    | Jadwal Khotib CRUD
    |--------------------------------------------------------------------------
    */


    Route::resource(

        'jadwal',

        JadwalController::class

    );







    /*
    |--------------------------------------------------------------------------
    | Daftar Masjid
    |--------------------------------------------------------------------------
    */


    Route::get('/masjid', function(){


        return view('admin.masjid');


    })->name('masjid');







    /*
    |--------------------------------------------------------------------------
    | Daftar Khotib
    |--------------------------------------------------------------------------
    */


    Route::get('/khotib', function(){


        return view('admin.khotib');


    })->name('khotib');








    /*
    |--------------------------------------------------------------------------
    | Data User
    |--------------------------------------------------------------------------
    */


    Route::get('/user', function(){


        $users = \App\Models\User::all();



        return view(

            'admin.user',

            compact('users')

        );


    })->name('user');






});








/*
|--------------------------------------------------------------------------
| STORAGE FOTO
|--------------------------------------------------------------------------
*/


Route::get('/storage/{filename}', function($filename){



    $path = storage_path(

        'app/public/'.$filename

    );




    if(!file_exists($path)){


        abort(404);


    }




    return Response::file($path);



})

->where('filename','.*');