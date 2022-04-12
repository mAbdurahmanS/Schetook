<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
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

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function datasiswa()
    {
        return $this->hasMany(DataSiswa::class);
    }

    public function tugasSiswa()
    {
        return $this->hasMany(TugasSiswa::class);
    }
}
