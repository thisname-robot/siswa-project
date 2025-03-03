<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataWali extends Model
{
    protected $fillable = [
        'id_wali',
        'id_siswa',
        'nama_wali',
        'Thn_Lhr_wali',
        'NIK_wali',
        'Pnddikan_trakhir_wali',
        'Pekerjaan_wali',
        'Penghasilan/bulan_wali, 10, 2',
        'Alamat_wali'
    ];

    public function siswa()
    {
        return $this->belongsTo(DataSiswa::class);
    }
}
