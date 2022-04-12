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
                <h1>Bil's Administration</h1>
                <h3>ID : 0000000</h3>
            </div>

        </div>
        
        <div class="bottom">
            <div class="administration">
                <h2>Administration Table</h2>
                
                <table class="table custom-table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Date</th>
                        <th scope="col">SPP Bulan</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Terbayar</th>
                        <th class="status" scope="col">Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>Desember</td>
                        <td>Rp 400.000</td>
                        <td>Rp 400.000</td>
                        <td class="status"><span>Lunas</span></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>Desember</td>
                        <td>Rp 400.000</td>
                        <td>Rp 400.000</td>
                        <td class="status"><span>Lunas</span></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>Desember</td>
                        <td>Rp 400.000</td>
                        <td>Rp 400.000</td>
                        <td class="status"><span>Lunas</span></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>Desember</td>
                        <td>Rp 400.000</td>
                        <td>Rp 400.000</td>
                        <td class="status"><span>Lunas</span></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

    </main> 

@endsection