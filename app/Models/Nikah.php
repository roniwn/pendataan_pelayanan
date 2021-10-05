<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nikah extends Model
{
    protected $table = 'data';
    protected $fillable = [
        'kode', 
        'tahun',
        'bulan',
        'kecamatan',
        'jumlah'
    ];  
}
