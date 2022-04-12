<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    protected $with = ['kelas'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['kelas'] ?? false, function($query, $kelas){
            return $query->whereHas('kelas', function($query) use ($kelas) {
                $query->where('slug', $kelas);
            });
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jampelajaran()
    {
        return $this->hasMany(JamPelajaran::class);
    }

    public function absensiswa()
    {
        return $this->hasMany(AbsenSiswa::class);
    }

    public function datasiswa()
    {
        return $this->hasMany(DataSiswa::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function tugasSiswa()
    {
        return $this->hasMany(TugasSiswa::class);
    }
}
