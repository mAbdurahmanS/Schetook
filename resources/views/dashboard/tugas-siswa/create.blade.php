@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="create">
            <div class="navbar">
                <a href="/dashboard/tugas-siswa">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>
            <div class="content">
                <h1>Tambah Data</h1>

                <form method="POST" action="/dashboard/tugas-siswa" enctype="multipart/form-data">
                    @csrf

                    <div class="form-control">
                        <label for="title">Judul Tugas</label>
                        <input type="text" class="@error('title') is-invalid @enderror" placeholder="Type here..." id="title" name="title" required autofocus value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="guru_id">Nama Guru</label>
                        <select name="guru_id">
                            @foreach ($gurus as $guru)
                                @if (old('guru_id') == $guru->id)
                                    <option value="{{ $guru->id }}" selected>{{ $guru->name }}</option>
                                @else
                                    <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                                @endif    
                            @endforeach
                        </select>
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
                    <div class="form-control">
                        <label for="desc">Deskripsi</label>
                        <input type="text" class="@error('desc') is-invalid @enderror" placeholder="Type here..." id="desc" name="desc" required autofocus value="{{ old('desc') }}">
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="keterangan">Deskripsi</label>
                        <input type="text" class="@error('keterangan') is-invalid @enderror" placeholder="Type here..." id="keterangan" name="keterangan" required autofocus value="{{ old('keterangan') }}">
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="answer">Deskripsi</label>
                        <input type="text" class="@error('answer') is-invalid @enderror" placeholder="Type here..." id="answer" name="answer" required autofocus value="{{ old('answer') }}">
                        @error('answer')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="btn" type="submit">Tambah</button>
                </form>
            </div>
        </div>

    </main>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/tugas-siswa/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        $('#body').summernote({
        placeholder: 'Hello stand alone ui',
        height: 400,
        popatmouse:true,

        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]

      });
             
    </script>
@endsection