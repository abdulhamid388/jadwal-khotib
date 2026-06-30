@extends('layouts.app')


@section('content')


<div class="min-h-screen bg-gray-100 py-12">


    <div class="max-w-7xl mx-auto px-6">



        <div class="bg-white shadow rounded-lg">



            <div class="p-6">


                <h2 class="text-2xl font-bold text-gray-800">

                    Dashboard Admin

                </h2>



                <p class="mt-4 text-gray-600">

                    Selamat datang,
                    {{ Auth::user()->name }}

                </p>



                <p class="mt-2 text-gray-500">


                    Anda berhasil login ke halaman admin
                    Jadwal Khotib Jumat.


                </p>




                <div class="mt-6">


                    <a 
                    href="{{ route('admin.jadwal.index') }}"
                    class="px-5 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">


                        Kelola Jadwal Khotib


                    </a>



                </div>




            </div>



        </div>




    </div>



</div>



@endsection