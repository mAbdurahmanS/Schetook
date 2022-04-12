<?php

namespace App\Http\Controllers;

use App\Models\JamPelajaran;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\Mapel;
use App\Models\User;
use App\Models\Waktu;
use Illuminate\Http\Request;
use Illuminate\Support\Js;

class JamPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
        if(request('mapel'))
        {
            $mapel = Mapel::firstWhere('slug', request('mapel'));
            $title = $mapel->name;
        }

        return view('dashboard.jam-pelajaran.index', [
            'title' => $title,
            'jampelajarans' => JamPelajaran::latest()->filter(request(['mapel']))->get(),
            'mapels' => Mapel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jam-pelajaran.create', [
            'mapels' => Mapel::all(),
            'waktus' => Waktu::all(),
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
        $validatedData = $request->validate([
            'hari' => 'required',
            'mapel_id' => 'required',
            'waktu_id' => 'required',
            'kelas_id' => 'required',
            'guru_id' => 'required',
        ]);

        JamPelajaran::create($validatedData);

        return redirect('/dashboard/jam-pelajaran')->with('success', 'New post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JamPelajaran  $jamPelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(JamPelajaran $jamPelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JamPelajaran  $jamPelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(JamPelajaran $jamPelajaran)
    {
        return view('dashboard.jam-pelajaran.edit', [
            'pelajaran' => $jamPelajaran,
            'mapels' => Mapel::all(),
            'waktus' => Waktu::all(),
            'kelases' => Kelas::all(),
            'gurus' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JamPelajaran  $jamPelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JamPelajaran $jamPelajaran)
    {

        $rules = [
            'hari' => 'required',
            'mapel_id' => 'required',
            'waktu_id' => 'required',
            'kelas_id' => 'required',
            'guru_id' => 'required',
        ];

        $validatedData = $request->validate($rules);

        JamPelajaran::where('id', $jamPelajaran->id)
                    ->update($validatedData);

        return redirect('/dashboard/jam-pelajaran')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JamPelajaran  $jamPelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(JamPelajaran $jamPelajaran)
    {
        JamPelajaran::destroy($jamPelajaran->id);

        return redirect('/dashboard/jam-pelajaran')->with('success', 'Post has been deleted');
    }
}
