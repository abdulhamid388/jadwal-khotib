<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Masjid extends Model
{

    use HasFactory;




    /*
    |--------------------------------------------------------------------------
    | Nama tabel
    |--------------------------------------------------------------------------
    */

    protected $table = 'masjids';






    /*
    |--------------------------------------------------------------------------
    | Data yang boleh disimpan
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'nama_masjid',

        'alamat'

    ];








    /*
    |--------------------------------------------------------------------------
    | Relasi ke tabel jadwals
    |--------------------------------------------------------------------------
    */

    public function jadwals()
    {


        return $this->hasMany(

            Jadwal::class,

            'masjid_id'

        );


    }




}