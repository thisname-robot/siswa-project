<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $fillable = [
        'id',
        'id_siswa',
        'id_matpel',
        'deskripsi',
        'nilai',
        'semester',
        'tahun_ajaran'
    ];

    public function siswa()
    {
        return $this->belongsTo(DataSiswa::class);
        return $this->hasOne(Matpel::class);
    }
}
