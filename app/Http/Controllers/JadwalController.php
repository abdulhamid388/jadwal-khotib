<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{

    public function index()
    {
        $jadwals = Jadwal::latest()->get();

        return view('admin.index', compact('jadwals'));
    }




    public function create()
    {
        return view('admin.create');
    }





    public function store(Request $request)
    {

        $request->validate([

            'nama_masjid' => 'required',

            'tanggal' => 'required',

            'nama_khotib' => 'required',

            'foto' => 'required|image|max:2048'

        ]);




        $foto = null;



        if($request->hasFile('foto')){


            $foto = $request->file('foto')
                ->store('khotib','public');


        }





        Jadwal::create([

            'nama_masjid' => $request->nama_masjid,

            'tanggal' => $request->tanggal,

            'nama_khotib' => $request->nama_khotib,

            'foto' => $foto

        ]);





        return redirect()
            ->route('admid.index')
            ->with('success','Jadwal berhasil ditambahkan');

    }







    public function edit($id)
    {

        $jadwal = Jadwal::findOrFail($id);


        return view('admin.edit', compact('jadwal'));

    }








    public function update(Request $request,$id)
    {

        $request->validate([


            'nama_masjid'=>'required',

            'tanggal'=>'required',

            'nama_khotib'=>'required',

            'foto'=>'nullable|image|max:2048'


        ]);




        $jadwal = Jadwal::findOrFail($id);




        $data = [

            'nama_masjid'=>$request->nama_masjid,

            'tanggal'=>$request->tanggal,

            'nama_khotib'=>$request->nama_khotib

        ];






        if($request->hasFile('foto')){


            // hapus foto lama
            if($jadwal->foto){

                Storage::disk('public')
                    ->delete($jadwal->foto);

            }



            $data['foto'] = $request->file('foto')
                ->store('khotib','public');


        }





        $jadwal->update($data);





        return redirect()
            ->route('admid.index')
            ->with('success','Jadwal berhasil diperbarui');


    }









    public function destroy($id)
    {


        $jadwal = Jadwal::findOrFail($id);



        if($jadwal->foto){

            Storage::disk('public')
                ->delete($jadwal->foto);

        }



        $jadwal->delete();





        return redirect()
            ->route('admid.jadwal.index')
            ->with('success','Jadwal berhasil dihapus');


    }


}