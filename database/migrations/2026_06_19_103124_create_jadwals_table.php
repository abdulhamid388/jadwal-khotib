<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{


    public function up(): void
    {


        Schema::create('jadwals', function(Blueprint $table){


            $table->id();



            $table->unsignedBigInteger('masjid_id');


            $table->unsignedBigInteger('khotib_id');



            $table->date('tanggal');



            $table->timestamps();




            $table->foreign('masjid_id')
                ->references('id')
                ->on('masjids')
                ->cascadeOnDelete();




            $table->foreign('khotib_id')
                ->references('id')
                ->on('khotibs')
                ->cascadeOnDelete();


        });


    }





    public function down(): void
    {


        Schema::dropIfExists('jadwals');


    }


};