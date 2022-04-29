<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}
