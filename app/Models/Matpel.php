<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    protected $fillable = [
        'id',
        'nama_matpel',
        'Deskripsi'
    ];

    public function nilai()
    {
        return $this->belongsTo(nilai::class);
    }
}
