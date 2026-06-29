<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Jadwal extends Model
{

    use HasFactory;



    /*
    |--------------------------------------------------------------------------
    | Nama tabel
    |--------------------------------------------------------------------------
    */

    protected $table = 'jadwals';





    /*
    |--------------------------------------------------------------------------
    | Data yang boleh disimpan
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'masjid_id',

        'khotib_id',

        'tanggal'

    ];







    /*
    |--------------------------------------------------------------------------
    | Relasi ke tabel masjid
    |--------------------------------------------------------------------------
    */

    public function masjid()
    {


        return $this->belongsTo(
            Masjid::class,
            'masjid_id'
        );


    }









    /*
    |--------------------------------------------------------------------------
    | Relasi ke tabel khotib
    |--------------------------------------------------------------------------
    */

    public function khotib()
    {


        return $this->belongsTo(
            Khotib::class,
            'khotib_id'
        );


    }









    /*
    |--------------------------------------------------------------------------
    | Format tanggal
    |--------------------------------------------------------------------------
    */

    protected $casts = [

        'tanggal' => 'date'

    ];



}