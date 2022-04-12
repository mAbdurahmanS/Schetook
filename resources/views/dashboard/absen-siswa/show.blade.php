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
                <h1>Absen Siswa {{ $siswa->siswa->name }}</h1>
                <h3>ID : {{ $siswa->siswa_id }}</h3>
            </div>

        </div>
        
        <div class="bottom">

            <div class="absen-siswa">

              <div class="top-table">
                <div class="left">
                  <h2>absen-harian Table</h2>
                </div>
                <div class="right">
                  <a class="filter" href="">
                    Filter
                  </a>
                  <a class="add" href="/dashboard/absen-siswa/create">
                    Add Data
                  </a>
                </div>
              </div>  
                
                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Tanggal Absen</th>
                      <th scope="col">Mata Pelajaran</th>
                      <th scope="col">Waktu</th>
                      <th scope="col">Nilai</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa->created_at->format('Y-m-d') }}</td>
                        <td>{{ $siswa->mapel->name }}</td>
                        <td>{{ $siswa->waktu->name }}</td>
                        <td>{{ $siswa->nilai }}</td>
                        <td>{{ $siswa->keterangan }}</td>
                        <td>{{ $siswa->status->name }}</td>
                        <td>
                          <a href="/dashboard/jam-pelajaran/{{ $siswa->id }}/edit">Edit</a>
                          <form action="/dashboard/jam-pelajaran/{{ $siswa->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="" onclick="return confirm('Are you sure?')">Delete</button>
                          </form>
                        </td>
                      </tr>
                        
                    @foreach ($siswa as $siswa)

                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->created_at->format('Y-m-d') }}</td>
                        <td>{{ $siswa->mapel->name }}</td>
                        <td>{{ $siswa->waktu->name }}</td>
                        <td>{{ $siswa->nilai }}</td>
                        <td>{{ $siswa->keterangan }}</td>
                        <td>{{ $siswa->status->name }}</td>
                        <td>
                          <a href="/dashboard/jam-pelajaran/{{ $siswa->id }}/edit">Edit</a>
                          <form action="/dashboard/jam-pelajaran/{{ $siswa->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="" onclick="return confirm('Are you sure?')">Delete</button>
                          </form>
                        </td>
                      </tr>
                        
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

    </main> 

@endsection