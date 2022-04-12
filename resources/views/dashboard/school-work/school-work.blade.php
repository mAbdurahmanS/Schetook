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
                <h1>Bil's School Work</h1>
                <h3>ID : 0000000</h3>
            </div>

        </div>
        
        <div class="bottom">
            <div class="school-work">
                <h2>School-Work Table</h2>
                
                <table class="table custom-table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Lesson</th>
                        <th scope="col">Score</th>
                        <th scope="col">Materi</th>
                        <th class="status" scope="col">Status</th>
                        <th class="action" scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>07.20</td>
                        <td>AlexSusano S.pdi</td>
                        <td>BPI</td>
                        <td>90</td>
                        <td>Rangkuman 
                            bab 12</td>
                        <td class="status"><span>Hadir</span></td>
                        <td class="action"><span>Detail</span></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>07.20</td>
                        <td>AlexSusano S.pdi</td>
                        <td>BPI</td>
                        <td>90</td>
                        <td>Rangkuman 
                            bab 12</td>
                        <td class="status"><span>Hadir</span></td>
                        <td class="action"><span>Detail</span></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>25-01-2022</td>
                        <td>07.20</td>
                        <td>AlexSusano S.pdi</td>
                        <td>BPI</td>
                        <td>90</td>
                        <td>Rangkuman 
                            bab 12</td>
                        <td class="status"><span>Hadir</span></td>
                        <td class="action"><span>Detail</span></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

    </main> 

@endsection