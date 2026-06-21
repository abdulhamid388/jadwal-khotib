<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';

    protected $fillable = [
        'nama_masjid',
        'tanggal',
        'nama_khotib',
        'foto'
    ];

    protected $casts = [
        'tanggal' => 'date'
    ];
}