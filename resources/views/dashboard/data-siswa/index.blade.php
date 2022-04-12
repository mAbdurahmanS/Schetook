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
                <h1>Data Siswa</h1>
                {{-- <h3>ID : 0000000</h3> --}}
            </div>

        </div>
        
        <div class="bottom">

            <div class="data-siswa">

              <div class="top-table">
                <div class="left">
                  <h2>Data Siswa Table</h2>
                </div>
                <div class="right">
                  {{-- <div class="dropdown">
                    <button class="btn-filter">Filter</button>
                    <div class="dropdown-filter">
                      @foreach ($kelases as $kelas)
                        <a href="/dashboard/data-siswa?kelas={{ $kelas->slug }}">{{ $kelas->name }}</a>
                      @endforeach
                    </div>
                  </div> --}}
                  <a class="add" href="/dashboard/data-siswa/create">
                    Tambah Data
                  </a>
                </div>
              </div>  
                
                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Nama Siswa</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Nama Wali Siswa</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">No. Telpon</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($datas as $data)

                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nisn }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->wali }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->telpon }}</td>
                        <td>
                          <a href="/dashboard/data-siswa/{{ $data->id }}" class="detail">Detail</a>
                          <a href="/dashboard/data-siswa/{{ $data->id }}/edit" class="edit">Edit</a>
                          <form action="/dashboard/data-siswa/{{ $data->id }}" method="POST">
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