@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="top">
            {{-- @auth --}}
              <div class="message">
                  <div class="text">
                      <h2><strong>Hi!</strong> You have 3 requests <a href="#">Check</a></h2>
                  </div>

                  <div class="notification">
                      <i class='bx bx-bell'></i>
                  </div>
              </div>

              <div class="title">
                  <h1>{{ auth()->user()->name }}'s Dashboard</h1>
                  <h3>ID : {{ auth()->user()->id }}</h3>
                  <h3 class="month">Month : <span id="date"></span></h3>
              </div>
              {{-- <div class="title">
                  <h1>Muhammad's Dashboard</h1>
                  <h3>ID : 19</h3>
                  <h3 class="month">Month : <span id="date"></span></h3>
              </div> --}}

              <div class="insights">

                  <div class="item">                        
                      <div class="icon">
                          <i class='bx bx-user-check'></i>
                      </div>
                      <div class="right">
                          <small class="text-muted">Siswa Hadir</small>
                          <h3>92</h3>
                      </div>
                  </div>

                  <div class="item">
                      <div class="icon">
                          <i class='bx bx-user-x'></i>
                      </div>
                      <div class="right">
                          <small class="text-muted">Siswa Alpha</small>
                          <h3>8</h3>
                      </div>
                  </div>

                  <div class="item">
                      <div class="icon">
                          <i class='bx bx-task'></i>
                      </div>
                      <div class="right">
                          <small class="text-muted">Tugas Selesai</small>
                          <h3>21</h3>
                      </div>
                  </div>

                  <div class="item">
                      <div class="icon">
                          <i class='bx bx-task-x' ></i>
                      </div>
                      <div class="right">
                          <small class="text-muted">Tugas Belum Selesai</small>
                          <h3>9</h3>
                      </div>
                  </div>

              </div>
            {{-- @endauth --}}
        </div>
        
        <div class="bottom">
            <div class="line-chart">
                <h2>Tabel Jadwal</h2>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Waktu Pembelajaran</th>
                        <th scope="col">Senin</th>
                        <th scope="col">Selasa</th>
                        <th scope="col">Rabu</th>
                        <th scope="col">Kamis</th>
                        <th scope="col">Jum'at</th>
                        <th scope="col">Sabtu</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td scope="row">07.00-07.20</td>
                        <td colspan="6">Pengkondisian</td>
                      </tr>
                      <tr>
                        <td rowspan="2">07.20-08.00</td>
                        <td>Kimia</td>
                        <td>Ekonomi</td>
                        <td>Sosiologi</td>
                        <td>B.Indonesia</td>
                        <td>B.Inggrish</td>
                        <td>Ekonomi</td>
                      </tr>
                      <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                        <td>D1</td>
                        <td>E1</td>
                        <td>F1</td>
                      </tr>

                      <tr>
                        <td rowspan="2">08.00-08.40</td>
                        <td>Kimia</td>
                        <td>Ekonomi</td>
                        <td>Sosiologi</td>
                        <td>B.Indonesia</td>
                        <td>B.Inggrish</td>
                        <td>Ekonomi</td>
                      </tr>
                      <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                        <td>D1</td>
                        <td>E1</td>
                        <td>F1</td>
                      </tr>

                      <tr>
                        <td scope="row">08.40-09.00</td>
                        <td colspan="6">Istirahat</td>
                      </tr>
                      
                      <tr>
                        <td rowspan="2">09.00-09.40</td>
                        <td>Kimia</td>
                        <td>Ekonomi</td>
                        <td>Sosiologi</td>
                        <td>B.Indonesia</td>
                        <td>B.Inggrish</td>
                        <td>Ekonomi</td>
                      </tr>
                      <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                        <td>D1</td>
                        <td>E1</td>
                        <td>F1</td>
                      </tr>
                      
                      <tr>
                        <td rowspan="2">09.40-10.20</td>
                        <td>Kimia</td>
                        <td>Ekonomi</td>
                        <td>Sosiologi</td>
                        <td>B.Indonesia</td>
                        <td>B.Inggrish</td>
                        <td>Ekonomi</td>
                      </tr>
                      <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                        <td>D1</td>
                        <td>E1</td>
                        <td>F1</td>
                      </tr>

                      <tr>
                        <td scope="row">10.20-04.00</td>
                        <td colspan="6">Istirahat</td>
                      </tr>
                      
                      <tr>
                        <td rowspan="2">10.40-11.20</td>
                        <td>Kimia</td>
                        <td>Ekonomi</td>
                        <td>Sosiologi</td>
                        <td>B.Indonesia</td>
                        <td>B.Inggrish</td>
                        <td>Ekonomi</td>
                      </tr>
                      <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                        <td>D1</td>
                        <td>E1</td>
                        <td>F1</td>
                      </tr>
                      
                      <tr>
                        <td rowspan="2">11.20-12.00</td>
                        <td>Kimia</td>
                        <td>Ekonomi</td>
                        <td>Sosiologi</td>
                        <td>B.Indonesia</td>
                        <td>B.Inggrish</td>
                        <td>Ekonomi</td>
                      </tr>
                      <tr>
                        <td>A1</td>
                        <td>B1</td>
                        <td>C1</td>
                        <td>D1</td>
                        <td>E1</td>
                        <td>F1</td>
                      </tr>

                      <tr>
                        <td scope="row">12.00-13.00</td>
                        <td colspan="6">Ishoma</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script>

        const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

        const d = new Date();
        let month = months[d.getMonth()];
        document.getElementById("date").innerHTML = month;
    </script>

@endsection