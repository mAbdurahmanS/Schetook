@extends('dashboard/layouts/main')

@section('content')

    <main>
        <div class="create">
            <div class="navbar">
                <a href="/dashboard/jam-pelajaran">
                    <i class='bx bx-left-arrow-alt'></i>
                </a>
            </div>
            <div class="content">
                <h1>Edit Data</h1>

                <form method="POST" action="/dashboard/jam-pelajaran/{{ $pelajaran->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf

                    <div class="form-control">
                        <label for="hari">Hari</label>
                        <select name="hari">
                            <option value="{{ old('hari', $pelajaran->hari) }}">{{ $pelajaran->hari }}</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum at">Jum at</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="mapel_id">Mata Pelajaran</label>
                        <select name="mapel_id">
                            @foreach ($mapels as $mapel)
                                @if (old('mapel_id', $pelajaran->mapel_id) == $mapel->id)
                                    <option value="{{ $mapel->id }}" selected>{{ $mapel->name }}</option>
                                @else
                                    <option value="{{ $mapel->id }}">{{ $mapel->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="waktu_id">Jam Pelajaran</label>
                        <select name="waktu_id">
                            @foreach ($waktus as $waktu)
                                @if (old('waktu_id', $pelajaran->waktu_id) == $waktu->id)
                                    <option value="{{ $waktu->id }}" selected>{{ $waktu->name }}</option>
                                @else
                                    <option value="{{ $waktu->id }}">{{ $waktu->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="kelas_id">Kelas</label>
                        <select name="kelas_id">
                            @foreach ($kelases as $kelas)
                                @if (old('kelas_id', $pelajaran->kelas_id) == $kelas->id)
                                    <option value="{{ $kelas->id }}" selected>{{ $kelas->name }}</option>
                                @else
                                    <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>
                    <div class="form-control">
                        <label for="guru_id">Guru Pengajar</label>
                        <select name="guru_id">
                            @foreach ($gurus as $guru)
                                @if (old('guru_id', $pelajaran->guru_id) == $guru->id)
                                    <option value="{{ $guru->id }}" selected>{{ $guru->name }}</option>
                                @else
                                    <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                                @endif    
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="body">
                        <label for="body">Body</label>
                        @error('body')
                            <p>{{ $message }}</p>
                        @enderror
                        <textarea name="body" id="body" rows="5" value="{{ old('body') }}"></textarea>
                    </div> --}}

                    <button class="btn" type="submit">Simpan</button>
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