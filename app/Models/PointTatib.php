<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointTatib extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'jenis_pelanggaran',
        'point',
        'tanggal_pelanggaran',
        'keterangan'
    ];

    public function users()
    {
        return $this->belongsTo(users::class);
    }
}
