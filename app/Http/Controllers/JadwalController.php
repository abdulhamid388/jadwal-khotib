<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{

    // tampil data jadwal admin
    public function index()
    {
        $jadwals = Jadwal::latest()->get();

        return view('admin.index', compact('jadwals'));
    }



    // halaman tambah
    public function create()
    {
        return view('admin.create');
    }



    // simpan jadwal
    public function store(Request $request)
    {

        $request->validate([

            'tanggal' => 'required',

            'nama_khotib' => 'required',

            'nama_masjid' => 'required',

            'foto' => 'nullable|image'

        ]);



        $foto = null;



        if($request->hasFile('foto')){

            $foto = $request->file('foto')
                    ->store('khotib','public');

        }



        Jadwal::create([

            'tanggal' => $request->tanggal,

            'nama_khotib' => $request->nama_khotib,

            'nama_masjid' => $request->nama_masjid,

            'foto' => $foto

        ]);



        return redirect('/admin')
            ->with('success','Jadwal berhasil ditambahkan');

    }




    // edit
    public function edit($id)
    {

        $jadwal = Jadwal::findOrFail($id);

        return view('admin.edit', compact('jadwal'));

    }





    // update
    public function update(Request $request,$id)
    {

        $request->validate([

            'tanggal'=>'required',

            'nama_khotib'=>'required',

            'nama_masjid'=>'required',

            'foto'=>'nullable|image'

        ]);



        $jadwal = Jadwal::findOrFail($id);



        $foto = $jadwal->foto;



        if($request->hasFile('foto')){

            $foto = $request->file('foto')
                    ->store('khotib','public');

        }



        $jadwal->update([

            'tanggal'=>$request->tanggal,

            'nama_khotib'=>$request->nama_khotib,

            'nama_masjid'=>$request->nama_masjid,

            'foto'=>$foto

        ]);



        return redirect('/admin')
            ->with('success','Jadwal berhasil diperbarui');

    }





    // hapus
    public function destroy($id)
    {

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->delete();


        return redirect('/admin')
            ->with('success','Jadwal berhasil dihapus');

    }

}