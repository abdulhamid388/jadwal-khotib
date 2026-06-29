<?php

namespace App\Http\Controllers;


use App\Models\Khotib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class KhotibController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Tampilkan semua khotib
    |--------------------------------------------------------------------------
    */


    public function index()
    {


        $khotibs = Khotib::latest()->get();



        return view(

            'admin.khotib',

            compact('khotibs')

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Form tambah khotib
    |--------------------------------------------------------------------------
    */


    public function create()
    {


        return view(

            'admin.khotib_create'

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Simpan khotib
    |--------------------------------------------------------------------------
    */


    public function store(Request $request)
    {



        $request->validate([



            'nama_khotib' => [

                'required',

                'string'

            ],




            'no_hp' => [

                'required'

            ],




            'foto' => [

                'required',

                'image',

                'max:2048'

            ]



        ]);









        $foto = $request

            ->file('foto')

            ->store(

                'khotib',

                'public'

            );








        Khotib::create([



            'nama_khotib' => $request->nama_khotib,



            'no_hp' => $request->no_hp,



            'foto' => $foto



        ]);








        return redirect()

        ->route('admin.khotib.index')

        ->with(

            'success',

            'Data khotib berhasil ditambahkan'

        );



    }









    /*
    |--------------------------------------------------------------------------
    | Detail
    |--------------------------------------------------------------------------
    */


    public function show($id)
    {


        $khotib = Khotib::findOrFail($id);



        return view(

            'admin.khotib_show',

            compact('khotib')

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Form edit
    |--------------------------------------------------------------------------
    */


    public function edit($id)
    {


        $khotib = Khotib::findOrFail($id);




        return view(

            'admin.khotib_edit',

            compact('khotib')

        );


    }









    /*
    |--------------------------------------------------------------------------
    | Update
    |--------------------------------------------------------------------------
    */


    public function update(Request $request,$id)
    {


        $request->validate([



            'nama_khotib' => [

                'required'

            ],




            'no_hp' => [

                'required'

            ],




            'foto' => [

                'nullable',

                'image',

                'max:2048'

            ]



        ]);








        $khotib = Khotib::findOrFail($id);






        $data = [



            'nama_khotib' => $request->nama_khotib,



            'no_hp' => $request->no_hp



        ];








        if($request->hasFile('foto')){



            if($khotib->foto){


                Storage::disk('public')

                ->delete($khotib->foto);


            }






            $data['foto'] = $request

            ->file('foto')

            ->store(

                'khotib',

                'public'

            );



        }









        $khotib->update($data);








        return redirect()

        ->route('admin.khotib.index')

        ->with(

            'success',

            'Data khotib berhasil diperbarui'

        );



    }









    /*
    |--------------------------------------------------------------------------
    | Hapus
    |--------------------------------------------------------------------------
    */


    public function destroy($id)
    {


        $khotib = Khotib::findOrFail($id);







        if($khotib->foto){


            Storage::disk('public')

            ->delete($khotib->foto);


        }







        $khotib->delete();







        return redirect()

        ->route('admin.khotib.index')

        ->with(

            'success',

            'Data khotib berhasil dihapus'

        );



    }



}