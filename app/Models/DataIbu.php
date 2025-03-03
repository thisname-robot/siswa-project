<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    protected $fillable = [
        'id_ibu',
        'id_siswa',
        'Nama_ibu',
        'Thn_Lhr_ibu',
        'NIK_ibu',
        'Pndidikan_trakhir_ibu',
        'Pekerjaan_ibu',
        'Penghasilan_bulan_ibu, 10, 2'
    ];

    public function siswa()
    {
        return $this->belongsTo(DataSiswa::class);
    }
}
