<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Khotib extends Model
{

    use HasFactory;



    /*
    |--------------------------------------------------------------------------
    | Nama tabel
    |--------------------------------------------------------------------------
    */

    protected $table = 'khotibs';




    /*
    |--------------------------------------------------------------------------
    | Field yang boleh disimpan
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'nama_khotib',

        'no_hp',

        'foto'

    ];





    /*
    |--------------------------------------------------------------------------
    | Relasi ke jadwals
    |--------------------------------------------------------------------------
    */

    public function jadwals()
    {


        return $this->hasMany(

            Jadwal::class,

            'khotib_id'

        );


    }






}