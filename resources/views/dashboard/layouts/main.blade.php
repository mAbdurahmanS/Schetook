<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SCHETOOK</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/dashboard/main.css">
    
    {{-- SummerNote --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="/summernote/summernote-lite.min.css" rel="stylesheet">
    <script src="/summernote/summernote-lite.min.js"></script>

    {{-- Box Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    
</head>
<body>

    <div class="container">
        
        @include('/dashboard/partials/sidebar')

        @yield('content')

    </div>

    <div class="menu">
        <button id="menu-btn">
            <i class='bx bx-menu'></i>
        </button>
    </div>


    

    <script src="/js/dashboard/main.js"></script>
</body>
</html>

