<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'jumlah, 10, 2',
        'tanggal',
        'jenis',
        'status',
        'keterangan'
    ];

    public function users()
    {
        return $this->belongsTo(users::class);
    }
}
