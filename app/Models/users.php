<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role_id',
        'create_at'
    ];

    public function role()
    {
        return $this->belongsTo(role::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(pembayaran::class);
    }

    public function nilai ()
    {
        return $this->hasMany(nilai::class);
    }

    public function DataSiswa()
    {
        return $this->hasOne(DataSiswa::class);
    }
}
