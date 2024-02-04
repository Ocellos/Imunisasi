<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bayi',
        'jenis_kelamin',
        'berat_badan',
        'usia_campak',
        'usia_polio',
        'usia_BCG',
        'keluhan',
        'status',
        'hasil'
    ];
}
