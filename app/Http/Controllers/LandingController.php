<?php

namespace App\Http\Controllers;


use App\Models\Jadwal;


class LandingController extends Controller
{


    public function index()
    {


        $jadwals = Jadwal::with([

            'masjid',

            'khotib'

        ])

        ->orderBy('tanggal','asc')

        ->orderBy('id','asc')

        ->get();





        return view(

            'landing.index',

            [

                'jadwals' => $jadwals

            ]

        );


    }


}