<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TugasSiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kelas', 'guru'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['kelas'] ?? false, function($query, $kelas){
            return $query->whereHas('kelas', function($query) use ($kelas) {
                $query->where('slug', $kelas);
            });
        });
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class);
    }
}
