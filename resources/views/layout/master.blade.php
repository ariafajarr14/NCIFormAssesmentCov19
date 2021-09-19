<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NCI Form Assesment Cov-19 @yield('title')</title>

    <link rel="icon" href="/image/logorel.png" type="image/x-icon">
    <!-- LOGO -->

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/style/homepage.css" type="text/css">
    <link rel="stylesheet" href="/style/formfill.css" type="text/css">
    <link rel="stylesheet" href="/style/navbar.css" type="text/css">
    <link rel="stylesheet" href="/style/button.css" type="text/css">
    <link rel="stylesheet" href="/style/footer.css" type="text/css">


    <!-- Scripts -->

    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img class="logo horizontal-logo rounded-full" src="/image/logo.png" alt="NCI logo"
                    style="width: 50px; margin-right:70px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse font-semibold" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    @if(auth()->user()->role == 'employee')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.viewdetailsassesment')}}">Assesment History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.viewdetailsuhu')}}">Temperature History</a>
                    </li>
                    @endif

                    @if(auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.userlist')}}">User List</a>
                    </li>
                    @endif
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="{{route('user.profile')}}"><i class="fa fa-user"
                                    aria-hidden="true"></i>
                                Profile</a>
                            <a class="dropdown-item" href="{{route('post.logout')}}"><i class="fa fa-sign-out"
                                    aria-hidden="true"></i>
                                Logout</a>
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


    @if(session('suhutinggi'))
    <div class="alert alert-danger" role="alert">
        {{session('suhutinggi')}}
    </div>
    @endif

    @if(session('updateprofile'))
    <div class="alert alert-success" role="alert">
        {{session('updateprofile')}}
    </div>
    @endif

    @if(session('welcomeback'))
    <div class="alert alert-info" role="alert">
        {{session('welcomeback')}} <strong>{{auth()->user()->name}} !</strong>
    </div>
    @endif

    @if(session('userdibuat'))
    <div class="alert alert-success" role="alert">
        {{session('userdibuat')}} dengan NIK : <strong>{{auth()->user()->nik_id}}</strong>
    </div>
    @endif

    @if(session('suhurendah'))
    <div class="alert alert-success" role="alert">
        {{session('suhurendah')}}
    </div>
    @endif

    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
    @endif

    @if(session('suksesform'))
    <div class="alert alert-success" role="alert">
        {{session('suksesform')}}
    </div>
    @endif

    @if(session('hapususer'))
    <div class="alert alert-success" role="alert">
        {{session('hapususer')}}
    </div>
    @endif




    <div class="mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">

                    @yield('konten')

                </div>
            </div><br><br><br>
        </div>

    </div>
    <footer class="bg-light  text-center text-lg-start" style="bottom: 0;">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #cde0c1;">
            © 2021 Copyright:
            <a class="text-dark" href="https://nuansa.com/" target="_blank">PT. Nuansa Cerah Informasi</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/js/popper.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/style/date.js"></script>
    <script type="text/javascript" src="/style/navbar.js"></script>

    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd',
        });

    </script>
    <script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'yyyy-mm-dd',
        });

    </script>
</body>

</html>
