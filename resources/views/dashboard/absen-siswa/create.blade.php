@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="create">
            <div class="navbar">
                <a href="/dashboard/siswa">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>
            <div class="content">
                <h1>Tambah Data</h1>

                <form method="POST" action="/dashboard/absen-siswa" enctype="multipart/form-data">
                    @csrf

                    {{-- <div class="form-control">
                        <label for="name">Nama Siswa</label>
                        <input type="text" class="@error('name') is-invalid @enderror" placeholder="Type here..." id="name" name="name" required autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="form-control">
                        <label for="mapel_id">Mata Pelajaran</label>
                        <select name="mapel_id">
                            @foreach ($siswases as $siswa)
                                @if (old('mapel_id') == $mapel->id)
                                    <option value="{{ $mapel->id }}" selected>{{ $mapel->name }}</option>
                                @else
                                    <option value="{{ $mapel->id }}">{{ $mapel->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="mapel_id">Mata Pelajaran</label>
                        <select name="mapel_id">
                            @foreach ($mapels as $mapel)
                                @if (old('mapel_id') == $mapel->id)
                                    <option value="{{ $mapel->id }}" selected>{{ $mapel->name }}</option>
                                @else
                                    <option value="{{ $mapel->id }}">{{ $mapel->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="waktu_id">Waktu</label>
                        <select name="waktu_id">
                            @foreach ($waktus as $waktu)
                                @if (old('waktu_id') == $waktu->id)
                                    <option value="{{ $waktu->id }}" selected>{{ $waktu->name }}</option>
                                @else
                                    <option value="{{ $waktu->id }}">{{ $waktu->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="nilai">Nilai</label>
                        <input type="text" class="@error('nilai') is-invalid @enderror" placeholder="Type here..." id="nilai" name="nilai" required autofocus value="{{ old('nilai') }}">
                        @error('nilai')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="@error('keterangan') is-invalid @enderror" placeholder="Type here..." id="keterangan" name="keterangan" required autofocus value="{{ old('keterangan') }}">
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="status_id">Status</label>
                        <select name="status_id">
                            @foreach ($statuses as $status)
                                @if (old('status_id') == $status->id)
                                    <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
                                @else
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>

                    <button class="btn" type="submit">Create Data</button>
                </form>
            </div>
        </div>

    </main>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
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