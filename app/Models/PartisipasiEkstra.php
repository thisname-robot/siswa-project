<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartisipasiEkstra extends Model
{
    protected $fillable = [
        'id',
        'users_id',
        'ekstra_id',
        'tanggal_masuk',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function ekstra()
    {
        return $this->belongsTo(ekstra::class);
    }
}
