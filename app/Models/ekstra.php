<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
    protected $fillable = [
        'id',
        'nama_ekstra',
        'deskripsi',
        'jadwal',
        'pengajar'
    ];
}
