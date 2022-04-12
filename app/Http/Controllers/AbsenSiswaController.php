<?php

namespace App\Http\Controllers;

use App\Models\AbsenSiswa;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\Mapel;
use App\Models\Status;
use App\Models\User;
use App\Models\Waktu;
use Illuminate\Http\Request;

class AbsenSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        if(request('siswa'))
        {
            $siswa = User::firstWhere('id', request('siswa'));
            $title = $siswa->name;
        }
        
        if(request('level'))
        {
            $level = Level::firstWhere('slug', request('level'));
            $title = $level->name;
        }

        if(request('kelas'))
        {
            $kelas = Kelas::firstWhere('slug', request('kelas'));
            $title = $kelas->name;
        }
        return view('dashboard.absen-siswa.index', [
            'title' => $title,
            'absensiswas' => AbsenSiswa::filter(request(['kelas', 'siswa', 'level']))->get(),
            'kelases' => Kelas::all(),
            'levels' => Level::all(),
            'siswaes' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.absen-siswa.create', [
            'siswas' => User::all(),
            'kelases' => Kelas::all(),
            'mapels' => Mapel::all(),
            'waktus' => Waktu::all(),
            'statuses' => Status::all(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(AbsenSiswa $absenSiswa)
    {
        $title = '';
        if(request('kelas'))
        {
            $kelas = Kelas::firstWhere('slug', request('kelas'));
            $title = $kelas->name;
        }

        return view('dashboard.absen-siswa.show', [
            'title' => $title,
            'siswa' => $absenSiswa

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(AbsenSiswa $absenSiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbsenSiswa $absenSiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AbsenSiswa  $absenSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbsenSiswa $absenSiswa)
    {
        //
    }
}
