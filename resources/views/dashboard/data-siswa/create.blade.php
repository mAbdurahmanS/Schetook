@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="create">
            <div class="navbar">
                <a href="/dashboard/data-siswa">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>
            <div class="content">
                <h1>Tambah Data</h1>

                <form method="POST" action="/dashboard/data-siswa" enctype="multipart/form-data">
                    @csrf

                    <div class="form-control">
                        <label for="level_id">Level</label>
                        <select name="level_id">
                            @foreach ($levels as $level)
                                @if (old('level_id') == $level->id)
                                    <option value="{{ $level->id }}" selected>{{ $level->name }}</option>
                                @else
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="nisn">NISN</label>
                        <input type="text" class="@error('nisn') is-invalid @enderror" placeholder="Type here..." id="nisn" name="nisn" required autofocus value="{{ old('nisn') }}">
                        @error('nisn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="name">Nama Siswa</label>
                        <input type="text" class="@error('name') is-invalid @enderror" placeholder="Type here..." id="name" name="name" required autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="username">Username</label>
                        <input type="text" class="@error('username') is-invalid @enderror" placeholder="Type here..." id="username" name="username" required autofocus value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="text" class="@error('email') is-invalid @enderror" placeholder="Type here..." id="email" name="email" required autofocus value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="password" class="@error('password') is-invalid @enderror" placeholder="Type here..." id="password" name="password" required autofocus value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="gender">Gender</label>
                        <select name="gender">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="wali">Nama Wali Siswa</label>
                        <input type="text" class="@error('wali') is-invalid @enderror" placeholder="Type here..." id="wali" name="wali" required autofocus value="{{ old('wali') }}">
                        @error('wali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="@error('alamat') is-invalid @enderror" placeholder="Type here..." id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="telpon">Telpon</label>
                        <input type="text" class="@error('telpon') is-invalid @enderror" placeholder="Type here..." id="telpon" name="telpon" required autofocus value="{{ old('telpon') }}">
                        @error('telpon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="kelas_id">Kelas</label>
                        <select name="kelas_id">
                            @foreach ($kelases as $kelas)
                                @if (old('kelas_id') == $kelas->id)
                                    <option value="{{ $kelas->id }}" selected>{{ $kelas->name }}</option>
                                @else
                                    <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>

                    <button class="btn" type="submit">Tambah</button>
                </form>
            </div>
        </div>

    </main>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
             
    </script>
@endsection