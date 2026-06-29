<?php

namespace App\Http\Controllers;


use App\Models\Jadwal;
use App\Models\Masjid;
use App\Models\Khotib;

use Illuminate\Http\Request;



class JadwalController extends Controller
{


    /*
    |--------------------------------------------------------------------------
    | Menampilkan semua jadwal
    |--------------------------------------------------------------------------
    */

    public function index()
    {

        $jadwals = Jadwal::with([
            'masjid',
            'khotib'
        ])
        ->latest()
        ->get();



        return view(
            'admin.index',
            compact('jadwals')
        );

    }






    /*
    |--------------------------------------------------------------------------
    | Form tambah jadwal
    |--------------------------------------------------------------------------
    */

    public function create()
    {


        $masjids = Masjid::all();


        $khotibs = Khotib::all();



        return view(
            'admin.create',
            compact(
                'masjids',
                'khotibs'
            )
        );


    }








    /*
    |--------------------------------------------------------------------------
    | Simpan jadwal
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {


        $request->validate([


            'masjid_id'=>'required',


            'khotib_id'=>'required',


            'tanggal'=>'required|date'


        ]);





        Jadwal::create([


            'masjid_id'=>$request->masjid_id,


            'khotib_id'=>$request->khotib_id,


            'tanggal'=>$request->tanggal


        ]);






        return redirect()

            ->route('admin.jadwal.index')

            ->with(
                'success',
                'Jadwal berhasil ditambahkan'
            );


    }









    /*
    |--------------------------------------------------------------------------
    | Detail
    |--------------------------------------------------------------------------
    */


    public function show($id)
    {


        $jadwal = Jadwal::with([
            'masjid',
            'khotib'
        ])
        ->findOrFail($id);




        return view(
            'admin.show',
            compact('jadwal')
        );


    }









    /*
    |--------------------------------------------------------------------------
    | Edit
    |--------------------------------------------------------------------------
    */


    public function edit($id)
    {


        $jadwal = Jadwal::findOrFail($id);



        $masjids = Masjid::all();


        $khotibs = Khotib::all();





        return view(
            'admin.edit',
            compact(
                'jadwal',
                'masjids',
                'khotibs'
            )
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


            'masjid_id'=>'required',


            'khotib_id'=>'required',


            'tanggal'=>'required|date'


        ]);






        $jadwal = Jadwal::findOrFail($id);






        $jadwal->update([


            'masjid_id'=>$request->masjid_id,


            'khotib_id'=>$request->khotib_id,


            'tanggal'=>$request->tanggal


        ]);







        return redirect()

            ->route('admin.jadwal.index')

            ->with(
                'success',
                'Jadwal berhasil diperbarui'
            );


    }









    /*
    |--------------------------------------------------------------------------
    | Hapus
    |--------------------------------------------------------------------------
    */


    public function destroy($id)
    {


        $jadwal = Jadwal::findOrFail($id);



        $jadwal->delete();






        return redirect()

            ->route('admin.jadwal.index')

            ->with(
                'success',
                'Jadwal berhasil dihapus'
            );


    }




}