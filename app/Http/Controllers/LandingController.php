<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Galeri;


class LandingController extends Controller
{

    public function index()
    {

        $jadwals = Jadwal::latest()->get();


        $galeris = Galeri::latest()->get();


        return view('landing.index', [

            'jadwals' => $jadwals,

            'galeris' => $galeris

        ]);

    }

}