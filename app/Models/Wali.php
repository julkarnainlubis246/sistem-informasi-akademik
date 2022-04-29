<?php

namespace App\Models;

use App\Models\Mahasiswa;
use App\Models\Pekerjaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wali extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class);
    }
}
