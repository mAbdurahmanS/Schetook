@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="create">
            <div class="navbar">
                <a href="/dashboard/data-siswa">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>
            <div class="content">
                {{-- <h1>Edit Data Siswa</h1> --}}
                <h1>{{ $datasiswa->id }}</h1>
                <h1>{{ $datasiswa->nisn }}</h1>
                <h1>{{ $datasiswa->name }}</h1>
                <h1>{{ $datasiswa->gender }}</h1>
                <h1>{{ $datasiswa->wali }}</h1>
                <h1>{{ $datasiswa->alamat }}</h1>
                <h1>{{ $datasiswa->telpon }}</h1>
                
            </div>
        </div>

    </main>
@endsection