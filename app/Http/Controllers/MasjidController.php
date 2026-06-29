<?php

namespace App\Http\Controllers;


use App\Models\Masjid;
use Illuminate\Http\Request;



class MasjidController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Tampilkan semua masjid
    |--------------------------------------------------------------------------
    */


    public function index()
    {


        $masjids = Masjid::latest()->get();



        return view(

            'admin.masjid',

            compact('masjids')

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Form tambah masjid
    |--------------------------------------------------------------------------
    */


    public function create()
    {


        return view(

            'admin.masjid_create'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Simpan masjid
    |--------------------------------------------------------------------------
    */


    public function store(Request $request)
    {


        $request->validate([



            'nama_masjid' => [

                'required',

                'string'

            ],




            'alamat' => [

                'required',

                'string'

            ]



        ]);








        Masjid::create([



            'nama_masjid' => $request->nama_masjid,



            'alamat' => $request->alamat



        ]);








        return redirect()

        ->route('admin.masjid.index')

        ->with(

            'success',

            'Data masjid berhasil ditambahkan'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Detail masjid
    |--------------------------------------------------------------------------
    */


    public function show($id)
    {


        $masjid = Masjid::findOrFail($id);




        return view(

            'admin.masjid_show',

            compact('masjid')

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Form edit
    |--------------------------------------------------------------------------
    */


    public function edit($id)
    {


        $masjid = Masjid::findOrFail($id);




        return view(

            'admin.masjid_edit',

            compact('masjid')

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Update masjid
    |--------------------------------------------------------------------------
    */


    public function update(Request $request,$id)
    {


        $request->validate([



            'nama_masjid' => [

                'required',

                'string'

            ],




            'alamat' => [

                'required',

                'string'

            ]



        ]);







        $masjid = Masjid::findOrFail($id);







        $masjid->update([



            'nama_masjid' => $request->nama_masjid,



            'alamat' => $request->alamat



        ]);








        return redirect()

        ->route('admin.masjid.index')

        ->with(

            'success',

            'Data masjid berhasil diperbarui'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Hapus masjid
    |--------------------------------------------------------------------------
    */


    public function destroy($id)
    {


        $masjid = Masjid::findOrFail($id);






        $masjid->delete();








        return redirect()

        ->route('admin.masjid.index')

        ->with(

            'success',

            'Data masjid berhasil dihapus'

        );


    }



}