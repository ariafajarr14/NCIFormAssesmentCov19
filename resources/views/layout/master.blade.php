<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NCI Form Assesment Cov-19 @yield('title')</title>

    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <!-- LOGO -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/style/homepage.css" type="text/css">
    <link rel="stylesheet" href="/style/formfill.css" type="text/css">
    <link rel="stylesheet" href="/style/navbar.css" type="text/css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#">
                <img class="logo horizontal-logo rounded-full" src="/image/logo.png" alt="NCI logo"
                    style="width: 50px; margin-right:70px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse font-semibold" id="navbarSupportedContent" >
                <ul class="navbar-nav" >
                    <li class="nav-item" >
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">Form Assesment</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">History Assesment</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Temperature Record</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aria Fajar Ramdhany
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">logout</a>
                        </div>
                    </li>
                </ul>
                    

                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow rounded">
        <div>
            <h2 class="font-semibold text-2xl leading-tight p-6">
                @yield('judul_halaman')
            </h2>
        </div>
    </header>


    

    <div class="mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                    
                        @yield('konten')
                    
                </div>
            </div>
        </div>

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
<script type="text/javascript" src="/style/date.js"></script>
<script type="text/javascript" src="/style/navbar.js"></script>
<script>
    $(window).on('load', function () {
        var delayMs = 100; // delay in milliseconds

        setTimeout(function () {
            $('#myModal').modal('show');
        }, delayMs);
    });

</script>

</html>
