<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    
    protected $fillable = [
        'user_id',
        'siswa',
        'nama',
        'absen',
        'nisn'
    ];

    public function user() {
        return $this->belongsTo(user::class);
    }
}
