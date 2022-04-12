<aside>
    <div class="top">
        <div class="logo" style="align-items: center">
            <img src="../../img/frame.svg" style="width: 50px;" alt="">
            <h2>SCHE<span style="color: #4155E5">TOOK</span></h2>
        </div>
        <div class="close" id="close-btn">
            <i class='bx bx-x'></i>
        </div>
    </div>

    <div class="sidebar">
        <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
            <i class='bx bx-home-alt'></i>
            <h3>Dashboard</h3>
        </a>
        <a href="/dashboard/jam-pelajaran" class="{{ Request::is('dashboard/jam-pelajaran') ? 'active' : '' }}">
            <i class='bx bx-time-five'></i>
            <h3>Jam Pelajaran</h3>
        </a>
        <a href="/dashboard/siswa" class="{{ Request::is('dashboard/siswa') ? 'active' : '' }}">
            <i class='bx bx-user-check'></i>
            <h3>Absen Siswa</h3>
        </a>
        <a href="/dashboard/data-siswa" class="{{ Request::is('dashboard/data-siswa') ? 'active' : '' }}">
            <i class='bx bx-user-circle'></i>
            <h3>Data Siswa</h3>
        </a>
        <a href="/dashboard/tugas-siswa" class="{{ Request::is('dashboard/tugas-siswa') ? 'active' : '' }}">
            <i class='bx bx-clipboard'></i>
            <h3>Tugas Sekolah</h3>
        </a>
        {{-- <a href="/dashboard/administration" class="{{ Request::is('dashboard/administration') ? 'active' : '' }}">
            <i class='bx bx-wallet'></i>
            <h3>Administrasi</h3>
        </a>
        <a href="/dashboard/messages" class="{{ Request::is('dashboard/messages') ? 'active' : '' }}">
            <i class='bx bx-message-square-dots'></i>
            <h3>Pesan</h3>
            <i class="message-count">26</i>
        </a> --}}
        <form action="/logout" method="post">
            @csrf
            <button type="submit"><i class='bx bx-log-out'></i><h3>Keluar</h3></button>
        </form>
    </div>
    
    {{-- <div class="bottom">
        <div class="icon">
            <img src="img/profile1.jpg" alt="">
        </div>
        @auth
        <div class="right">
            <h3>{{ auth()->user()->name }}</h3>
            <p>{{ auth()->user()->email }}</p>
        </div>
        @endauth
        
    </div> --}}
</aside>