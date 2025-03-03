<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataAyah extends Model
{
    protected $fillable = [
        'id',
        'id_siswa',
        'Nama_ayah',
        'Thn_Lhr_ayah',
        'NIK_ayah',
        'Pndidikan_trakhir_ayah',
        'Pekerjaan_ayah',
        'Penghasilan_bulan_ayah, 10, 2'
    ];

    public function siswa()
    {
        return $this->belongsTo(DataSiswa::class);
    }
}
