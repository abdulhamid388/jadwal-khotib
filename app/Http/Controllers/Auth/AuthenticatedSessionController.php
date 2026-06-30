<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthenticatedSessionController extends Controller
{


    /**
     * Display the login view.
     */
    public function create(): View
    {

        return view('auth.login');

    }





    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {


        // proses login
        $request->authenticate();



        // buat session baru
        $request->session()->regenerate();




        // setelah login langsung masuk admin
        return redirect()
            ->route('admin.jadwal.index');


    }








    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {


        // logout user
        Auth::guard('web')->logout();




        // hapus session
        $request->session()->invalidate();




        // buat token baru
        $request->session()->regenerateToken();






        // setelah logout kembali ke halaman login
        return redirect()
            ->route('login');


    }


}