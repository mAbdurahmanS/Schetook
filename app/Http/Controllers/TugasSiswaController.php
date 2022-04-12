<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\TugasSiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class TugasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        if(request('kelas'))
        {
            $kelas = Kelas::firstWhere('slug', request('kelas'));
            $title = $kelas->name;
        }

        return view('dashboard.tugas-siswa.index', [
            'title' => $title,
            'tugases' => TugasSiswa::latest()->filter(request(['kelas', 'guru']))->get(),
            'kelases' => Kelas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tugas-siswa.create', [
            'kelases' => Kelas::all(),
            'gurus' => User::all()
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
        $validetData = $request->validate([
            'title' => 'required',
            'guru_id' => 'required',
            'kelas_id' => 'required',
            'desc' => 'required',
            'keterangan' => 'required',
            'answer' => 'required'
        ]);

        TugasSiswa::create($validetData);

        return redirect('/dashboard/tugas-siswa')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.tugas-siswa.show', [
            'tugas' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
