<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JamPelajaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['mapel', 'kelas', 'guru', 'waktu' ];
    
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['mapel'] ?? false, function($query, $mapel){
            return $query->whereHas('mapel', function($query) use ($mapel) {
                $query->where('slug', $mapel);
            });
        });
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class, 'guru_id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id');
    }
}
