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
                <h1>Absen Siswa</h1>
                <h3>ID : 0000000</h3>
            </div>

        </div>
        
        <div class="bottom">

            <div class="absen-siswa">

              <div class="top-table">
                <div class="left">
                  <h2>absen-harian Table</h2>
                </div>
                <div class="right">
                  <div class="dropdown">
                    <button class="btn-filter">Filter</button>
                    <div class="dropdown-filter">
                      @foreach ($kelases as $kelas)
                        <a href="/dashboard/absen-siswa?kelas={{ $kelas->slug }}">{{ $kelas->name }}</a>
                      @endforeach
                    </div>
                  </div>
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
                    @foreach ($absensiswas as $absensiswa)

                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $absensiswa->created_at->format('Y-m-d') }}</td>
                        <td>{{ $absensiswa->mapel->name }}</td>
                        <td>{{ $absensiswa->waktu->name }}</td>
                        <td>{{ $absensiswa->nilai }}</td>
                        <td>{{ $absensiswa->keterangan }}</td>
                        <td>{{ $absensiswa->status->name }}</td>
                        <td>
                          <a href="/dashboard/jam-pelajaran/{{ $absensiswa->id }}/edit" class="edit">Edit</a>
                          <form action="/dashboard/absen-siswa/{{ $absensiswa->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="delete" onclick="return confirm('Are you sure?')">Delete</button>
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