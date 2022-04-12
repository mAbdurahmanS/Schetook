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
                <h1>Edit Data</h1>

                <form method="POST" action="/dashboard/data-siswa/{{ $datasiswa->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="form-control">
                        <label for="level_id">Level</label>
                        <select name="level_id">
                            @foreach ($levels as $level)
                                @if (old('level_id', $datasiswa->level_id) == $level->id)
                                    <option value="{{ $level->id }}" selected>{{ $level->name }}</option>
                                @else
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>

                    <div class="form-control">
                        <label for="nisn">NISN</label>
                        <input type="text" class="@error('nisn') is-invalid @enderror" placeholder="Type here..." id="nisn" name="nisn" required value="{{ old('nisn', $datasiswa->nisn) }}">
                        @error('nisn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="name">Nama Siswa</label>
                        <input type="text" class="@error('name') is-invalid @enderror" placeholder="Type here..." id="name" name="name" required value="{{ old('name', $datasiswa->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="username">Username</label>
                        <input type="text" class="@error('username') is-invalid @enderror" placeholder="Type here..." id="username" name="username" required value="{{ old('username', $datasiswa->username) }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="text" class="@error('email') is-invalid @enderror" placeholder="Type here..." id="email" name="email" required value="{{ old('email', $datasiswa->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="password" class="@error('password') is-invalid @enderror" placeholder="Type here..." id="password" name="password" required value="{{ old('password', $datasiswa->password) }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="gender">Gender</label>
                        <input type="text" class="@error('gender') is-invalid @enderror" placeholder="Type here..." id="gender" name="gender" required value="{{ old('gender', $datasiswa->gender) }}">
                        @error('gender')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="wali">Nama Wali Siswa</label>
                        <input type="text" class="@error('wali') is-invalid @enderror" placeholder="Type here..." id="wali" name="wali" required value="{{ old('wali', $datasiswa->wali) }}">
                        @error('wali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="@error('alamat') is-invalid @enderror" placeholder="Type here..." id="alamat" name="alamat" required value="{{ old('alamat', $datasiswa->alamat) }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="telpon">Telpon</label>
                        <input type="text" class="@error('telpon') is-invalid @enderror" placeholder="Type here..." id="telpon" name="telpon" required value="{{ old('telpon', $datasiswa->telpon) }}">
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
                                @if (old('kelas_id', $datasiswa->kelas_id) == $kelas->id)
                                    <option value="{{ $kelas->id }}" selected>{{ $kelas->name }}</option>
                                @else
                                    <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>

                    <button class="btn" type="submit">Simpan</button>
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