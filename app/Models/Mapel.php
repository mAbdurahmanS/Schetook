<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jampelajaran()
    {
        return $this->hasMany(JamPelajaran::class);
    }

    public function absensiswa()
    {
        return $this->hasMany(AbsenSiswa::class);
    }

}
