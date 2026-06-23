<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;

class LandingController extends Controller
{

    public function index()
    {


        $jadwals = Jadwal::orderBy('tanggal','asc')
            ->orderBy('id','asc')
            ->get();



        return view(
            'landing.index',
            compact('jadwals')
        );


    }

}