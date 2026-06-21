<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{

    // tampil data jadwal di admin
    public function index()
    {

        $jadwals = Jadwal::latest()->get();


        return view('admin.index', compact('jadwals'));

    }



    // halaman tambah jadwal
    public function create()
    {

        return view('admin.create');

    }



    // simpan jadwal baru
    public function store(Request $request)
    {


        $request->validate([

            'tanggal' => 'required',
            'nama_khotib' => 'required',
            'tema' => 'required',
            'nama_masjid' => 'required',
            'jam' => 'required',

        ]);



        Jadwal::create([

            'tanggal'=>$request->tanggal,
            'nama_khotib'=>$request->nama_khotib,
            'tema'=>$request->tema,
            'nama_masjid'=>$request->nama_masjid,
            'jam'=>$request->jam,

        ]);



        return redirect('/admin')
        ->with('success','Jadwal berhasil ditambahkan');


    }





    // halaman edit
    public function edit($id)
    {


        $jadwal = Jadwal::findOrFail($id);



        return view('admin.edit',compact('jadwal'));


    }





    // update data
    public function update(Request $request,$id)
    {


        $request->validate([

            'tanggal'=>'required',
            'nama_khotib'=>'required',
            'tema'=>'required',
            'nama_masjid'=>'required',
            'jam'=>'required'

        ]);




        $jadwal = Jadwal::findOrFail($id);



        $jadwal->update([

            'tanggal'=>$request->tanggal,
            'nama_khotib'=>$request->nama_khotib,
            'tema'=>$request->tema,
            'nama_masjid'=>$request->nama_masjid,
            'jam'=>$request->jam,


        ]);




        return redirect('/admin')
        ->with('success','Jadwal berhasil diperbarui');


    }





    // hapus data
    public function destroy($id)
    {


        $jadwal = Jadwal::findOrFail($id);


        $jadwal->delete();



        return redirect('/admin')
        ->with('success','Jadwal berhasil dihapus');


    }



}