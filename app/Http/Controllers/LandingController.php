<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;

class LandingController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::orderBy('created_at', 'desc')->get();

        return view('landing.index', [
            'jadwals' => $jadwals
        ]);
    }
}