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
                    @if (session()->has('success'))
                      <div class="alert" role="alert">
                          {{ session('success') }}
                      </div>
                  @endif
                </div>
            </div>

            <div class="title">
                <h1>Jam Pelajaran</h1>
            </div>

        </div>
        
        <div class="bottom">
            

            <div class="jam-pelajaran">

              <div class="top-table">
                <div class="left">
                  <h2>Tabel Jam Pelajaran {{ $title }}</h2>
                </div>
                <div class="right">
                  <div class="dropdown">
                    <button class="btn-filter">Filter</button>
                    <div class="dropdown-filter">
                      @foreach ($mapels as $mapel)
                        <a href="/dashboard/jam-pelajaran?mapel={{ $mapel->slug }}">{{ $mapel->name }}</a>
                      @endforeach
                    </div>
                  </div>
                  <a class="add" href="/dashboard/jam-pelajaran/create">
                    Tambah Data
                  </a>
                </div>
              </div>  
                
                <table class="table custom-table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Jam Pelajaran</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Guru Pengajar</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jampelajarans as $jampelajaran)

                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $jampelajaran->hari }}</td>
                          <td>{{ $jampelajaran->mapel->name }}</td>
                          <td>{{ $jampelajaran->waktu->name }}</td>
                          <td>{{ $jampelajaran->kelas->name }}</td>
                          <td>{{ $jampelajaran->guru->name }}</td>
                          <td>
                            <a href="/dashboard/jam-pelajaran/{{ $jampelajaran->id }}/edit" class="edit">Edit</a>
                            <form action="/dashboard/jam-pelajaran/{{ $jampelajaran->id }}" method="POST">
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