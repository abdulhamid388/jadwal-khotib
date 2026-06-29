<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Khotib extends Model
{

    use HasFactory;



    protected $fillable = [

        'nama_khotib',

        'no_hp',

        'foto'

    ];





    public function jadwals()
    {

        return $this->hasMany(
            Jadwal::class
        );

    }


}