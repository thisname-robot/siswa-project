<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'role_name'
    ];

    public function users()
    {
        return $this->hasMany(users::class);
    }
}
