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
    | Field yang boleh diisi
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'masjid_id',
        'khotib_id',
        'tanggal'

    ];



    /*
    |--------------------------------------------------------------------------
    | Relasi ke tabel masjids
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
    | Relasi ke tabel khotibs
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