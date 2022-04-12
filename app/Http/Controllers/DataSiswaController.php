<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\User;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
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
            $sisw = User::firstWhere('slug', request('sisw'));
            $title = $sisw->name;
        }

        return view('dashboard.data-siswa.index', [
            'title' => $title,
            'datas' => User::filter(request(['siswa']))->get(),
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
        return view('dashboard.data-siswa.create', [
            'datas' => User::all(),
            'levels' => Level::all(),
            'kelases' => Kelas::all(),
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
            'nisn' => 'required',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'wali' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
            'level_id' => 'required',
            'kelas_id' => 'required',
        ]);

        User::create($validatedData);

        return redirect('/dashboard/data-siswa')->with('success', 'New data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(User $dataSiswa)
    {
        return view('dashboard.data-siswa.show', [
            'datasiswa' => $dataSiswa,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(User $dataSiswa)
    {
        return view('dashboard.data-siswa.edit', [
            'datasiswa' => $dataSiswa,
            'datas' => User::all(),
            'levels' => Level::all(),
            'kelases' => Kelas::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $dataSiswa)
    {

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'wali' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
            'level_id' => 'required',
            'kelas_id' => 'required',
        ];

        if($request->username != $dataSiswa->username) {
            $rules['username'] = 'required';
        }

        if($request->nisn != $dataSiswa->nisn) {
            $rules['nisn'] = 'required';
        }

        $validatedData = $request->validate($rules);

        User::where('id', $dataSiswa->id)
                    ->update($validatedData);

        return redirect('/dashboard/data-siswa')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataSiswa  $dataSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $dataSiswa)
    {
        User::destroy($dataSiswa->id);

        return redirect('/dashboard/data-siswa')->with('success', 'Post has been deleted');
    }
}
