<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['siswa' ];
    
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['kelas'] ?? false, function($query, $kelas){
            return $query->whereHas('kelas', function($query) use ($kelas) {
                $query->where('nisn', $kelas);
            });
        });
    }

    public function siswa()
    {
        return $this->belongsTo(User::class);
    }
}
