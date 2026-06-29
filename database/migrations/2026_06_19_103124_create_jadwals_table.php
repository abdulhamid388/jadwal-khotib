<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {


        Schema::create('jadwals', function (Blueprint $table) {


            $table->id();



            $table->foreignId('masjid_id')
                ->constrained('masjids')
                ->cascadeOnDelete();



            $table->foreignId('khotib_id')
                ->constrained('khotibs')
                ->cascadeOnDelete();




            $table->date('tanggal');



            $table->timestamps();


        });


    }







    public function down(): void
    {


        Schema::dropIfExists('jadwals');


    }


};