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
                <h1>{{ $tugas->id }}</h1>
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