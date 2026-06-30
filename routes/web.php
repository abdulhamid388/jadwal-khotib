<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


use App\Http\Controllers\LandingController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\KhotibController;





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


    return redirect()
        ->route('admin.jadwal.index');


})

->middleware('auth')

->name('dashboard');









/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/


Route::middleware('auth')

->prefix('admin')

->name('admin.')

->group(function(){







    /*
    |--------------------------------------------------------------------------
    | JADWAL
    |--------------------------------------------------------------------------
    */


    Route::resource(

        'jadwal',

        JadwalController::class

    );








    /*
    |--------------------------------------------------------------------------
    | MASJID
    |--------------------------------------------------------------------------
    */


    Route::resource(

        'masjid',

        MasjidController::class

    );









    /*
    |--------------------------------------------------------------------------
    | KHOTIB
    |--------------------------------------------------------------------------
    */


    Route::resource(

        'khotib',

        KhotibController::class

    );












    /*
    |--------------------------------------------------------------------------
    | USER
    |--------------------------------------------------------------------------
    */



    // tampil user

    Route::get('/user', function(){


        $users = \App\Models\User::all();



        return view(

            'admin.user',

            compact('users')

        );



    })

    ->name('user');








    // halaman edit user


    Route::get('/user/{id}/edit', function($id){



        $user = \App\Models\User::findOrFail($id);



        return view(

            'admin.user-edit',

            compact('user')

        );



    })

    ->name('user.edit');









    // update user


    Route::put('/user/{id}', function(Request $request,$id){



        $user = \App\Models\User::findOrFail($id);




        $request->validate([


            'email'=>'required|email',


            'password'=>'nullable|min:6'


        ]);








        $user->email = $request->email;






        if($request->password){



            $user->password = Hash::make(

                $request->password

            );



        }







        $user->save();







        return redirect()

        ->route('admin.user')

        ->with(

            'success',

            'User berhasil diperbarui'

        );




    })

    ->name('user.update');









    // hapus user



    Route::delete('/user/{id}', function($id){



        $user = \App\Models\User::findOrFail($id);



        $user->delete();





        return redirect()

        ->route('admin.user')

        ->with(

            'success',

            'User berhasil dihapus'

        );




    })

    ->name('user.delete');












    /*
    |--------------------------------------------------------------------------
    | KEMBALI WEBSITE
    |--------------------------------------------------------------------------
    */


    Route::get('/website', function(){



        return redirect('/');



    })

    ->name('website');







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