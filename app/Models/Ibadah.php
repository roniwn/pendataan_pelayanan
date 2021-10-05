<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibadah extends Model
{
    protected $table = 'ibadah';
    protected $fillable = [
        'kode',
        'kecamatan',
        'tahun',
        'masjid',
        'musholla',
        'gereja_protestant',
        'gereja_katholik',
        'pura',
        'vihara',
        'jumlah'
    ];  
}