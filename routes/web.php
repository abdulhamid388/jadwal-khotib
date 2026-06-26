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
| LANDING WEBSITE
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


Route::get('/dashboard', function(){


    return view('dashboard');


})

->middleware('auth')

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
    | CRUD JADWAL KHOTIB
    |--------------------------------------------------------------------------
    */


    Route::resource(

        'jadwal',

        JadwalController::class

    );









    /*
    |--------------------------------------------------------------------------
    | DAFTAR MASJID
    |--------------------------------------------------------------------------
    */


    Route::get('/masjid', function(){



        $masjids = \App\Models\Jadwal::select(

            'nama_masjid'

        )

        ->groupBy('nama_masjid')

        ->get();





        return view(

            'admin.masjid',

            compact('masjids')

        );



    })

    ->name('masjid');









    /*
    |--------------------------------------------------------------------------
    | DAFTAR KHOTIB
    |--------------------------------------------------------------------------
    */


    Route::get('/khotib', function(){



        $khotibs = \App\Models\Jadwal::select(

            'nama_khotib',

            'foto'

        )

        ->groupBy(

            'nama_khotib',

            'foto'

        )

        ->get();






        return view(

            'admin.khotib',

            compact('khotibs')

        );




    })

    ->name('khotib');









    /*
    |--------------------------------------------------------------------------
    | DATA USER
    |--------------------------------------------------------------------------
    */


    Route::get('/user', function(){



        $users = \App\Models\User::all();





        return view(

            'admin.user',

            compact('users')

        );



    })

    ->name('user');







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