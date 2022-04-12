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
                  <h2>Absen Siswa Table</h2>
                </div>
                <div class="right">
                  <div class="dropdown">
                    <button class="btn-filter">Filter</button>
                    <div class="dropdown-filter">
                      @foreach ($kelases as $kelas)
                        <a href="/dashboard/siswa?kelas={{ $kelas->slug }}">{{ $kelas->name }}</a>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>  
                
                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Nama Siswa</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($siswases as $siswa)

                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nisn }}</td>
                        <td>{{ $siswa->name }}</td>
                        <td>{{ $siswa->kelas->name }}</td>
                        <td>
                          <a href="/dashboard/absen-siswa?siswa={{ $siswa->id }}" class="absen">Absen</a>
                        </td>
                      </tr>
                        
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

    </main> 

@endsection