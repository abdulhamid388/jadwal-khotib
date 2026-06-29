<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    /**
     * Membuat tabel masjids
     */
    public function up(): void
    {


        Schema::create('masjids', function (Blueprint $table) {


            $table->id();


            $table->string('nama_masjid');


            $table->text('alamat');


            $table->timestamps();


        });


    }





    /**
     * Menghapus tabel masjids
     */
    public function down(): void
    {


        Schema::dropIfExists('masjids');


    }


};