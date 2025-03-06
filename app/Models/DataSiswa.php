<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $fillable = [
        'id',
        'id_users',
        'jalur_masuk_PPDB',
        'Nama_siswa',
        'Jenis_Kelamin',
        'NISN',
        'NIK',
        'NO_KK',
        'Tgl_Lahir',
        'Tempat_Lahir',
        'Agama',
        'Alamat_Rumah',
        'RT',
        'RW',
        'Dusun',
        'Desa_Kelurahan',
        'Kecamatan',
        'Kode_Pos',
        'Koordinat_Alamat_Rumah',
        'Tinggal_Bersama',
        'Alat_Transportasi',
        'Anak_Keberapa',
        'Hobby',
        'Cita_cita',
        'Menerima_KIP_KPS_PIP',
        'No_Hp_Siswa',
        'No_Hp_Ortu',
        'Email_Siswa',
        'No_Ijazah_SMP_MTs',
        'No_SKHUN',
        'Jenis_Sekolah_Asal',
        'Asal_Sekolah',
        'NPSN_SMP_MTs',
        'Kab_Kota_asal_sekolah',
        'Kec_asal_sekolah',
        'Asal_SD_MI',
        'TB', 5, 2,
        'BB', 5, 2,
        'Lingkar_Kepala', 5, 2,
        'jarak_rumah_sekolah_km',
        'jarak_rumah_sekolah_menit',
        'Jmlh_saudara_kandung',
        'rata_rata_semester1', 5, 2,
        'rata_rata_semester2', 5, 2,
        'rata_rata_semester3', 5, 2,
        'rata_rata_semester4', 5, 2,
        'rata_rata_semester5', 5, 2,
        'vaksin1',
        'vaksin2',
        'vaksin3',
        'upload_kk',
        'upload_skl',    
    ];

    public function users()

    {
        return $this->belongsTo(users::class);
    }

    public function DataWali()
    {
        return $this->hasOne(Datawali::class);
    }

    public function DataIbu()
    {
        return $this->hasOne(DataIbu::class);
    }

    public function DataAyah()
    {
        return $this->hasOne(DataAyah::class);
    }


}
