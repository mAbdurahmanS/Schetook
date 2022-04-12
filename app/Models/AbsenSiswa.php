<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenSiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['siswa', 'kelas', 'mapel', 'waktu', 'status', 'level' ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['siswa'] ?? false, function($query, $siswa){
            return $query->whereHas('siswa', function($query) use ($siswa) {
                $query->where('id', $siswa);
            });
        });
        $query->when($filters['kelas'] ?? false, function($query, $kelas){
            return $query->whereHas('kelas', function($query) use ($kelas) {
                $query->where('slug', $kelas);
            });
        });
        $query->when($filters['level'] ?? false, function($query, $level){
            return $query->whereHas('level', function($query) use ($level) {
                $query->where('slug', $level);
            });
        });
    }

    public function siswa()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

}
