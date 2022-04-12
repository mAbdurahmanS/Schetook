@extends('dashboard/layouts/main')

@section('content')
    <main>
        <div class="top">
            <div class="message">
                <div class="text">
                    <h2><strong>Hi!</strong> You have 3 requests <a href="#">Check</a></h2>
                </div>

                <div class="notification">
                    <i class='bx bx-bell'></i>
                </div>
            </div>

            <div class="title">
                <h1>Tugas Sekolah</h1>
                <h3>ID : 0000000</h3>
            </div>

            <a href="/dashboard/tugas-siswa/create">Tambah Data</a>

        </div>
        
        <div class="bottom">
            @foreach ($tugases as $tugas)
                <div class="tugas-siswa">
                    <h2>{{ $tugas->title }}</h2>
                    <div style="display: flex; gap: 1rem;">
                    <h4>{{ $tugas->created_at }}</h4>
                    <h6>{{ $tugas->keterangan }}</h6>
                    </div>

                    <p>{{ $tugas->desc }}</p>
                    <a href="/dashboard/tugas-siswa/{{ $tugas->id }}" class="details">View details</a>
                </div>
            @endforeach
        </div>

    </main> 

@endsection