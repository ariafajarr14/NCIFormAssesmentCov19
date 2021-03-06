<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/image/logorel.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/login.css" type="text/css">
    <link rel="stylesheet" href="/style/loader.css" type="text/css">

    <!-- Scripts -->
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>Login</title>
</head>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

    <div class="row full-height">
        <div class="leftarea col-sm-7 text-center mx-auto align-self-center" style="background-color:#F1FFD6;"><img
                class="img-fluid" src="image/logo.png" alt="" style="width: 400px;"></div>
        <div class="rightarea text-center col-sm-5" style="background-color:#FFFFFF;">

            <h2 class="mt-5 col-sm-10 ml-auto mr-auto">Aplikasi Pengelolaan Self Assesment Resiko Covid 19 dan Pengukuran Suhu</h2>
            <h5 class="mt-5">Tanggal : <span id="tanggal"></span></h5>
            <br>
            @if(session('errors'))
            <div class="mt-1 alert alert-danger alert-dismissible fade show" role="alert">
                Something it's wrong:
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (Session::has('success'))
            <div class="mt-1 alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
            @if (Session::has('error'))
            <div class="mt-1 alert alert-danger">
                {{ Session::get('error') }}
            </div>
            @endif
            <form method="POST" action="/postlogin" class="text-center mt-4 col-sm-8 ml-auto mr-auto">
                @csrf
                <div class="form-group ">
                    <input id="nik_id" type="text" name="nik_id" class="form-control" placeholder="Masukkan NIK"
                        required autofocus>
                </div>
                <div class="form-group mt-4">
                    <input id="password" type="password" name="password" class="form-control" required
                        autocomplete="current-password" placeholder="Masukkan Password">
                </div>
                <br>
                <button type="submit" class="btn btn-success col-sm-12">Login</button>
                <small id="emailHelp" class="form-text text-muted">Belum punya akun? <a
                        href="register">Sign-up</a></small>
            </form>
            <br>
            <br>
        </div>
    </div>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="style/date.js"></script>
    <script>
        setTimeout(function () {
            $('.loader_bg').fadeToggle();
        }, 1500);

    </script>
</body>


</html>
