<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/login.css" type="text/css">

    <title>Login</title>
</head>

<body>


    <div class="row full-height">
        <div class="leftarea col-sm-7 text-center mx-auto align-self-center" style="background-color:#F1FFD6;"><img
                class="img-fluid" src="image/logo.png" alt="" style="width: 400px;"></div>
        <div class="rightarea text-center col-sm-5" style="background-color:#FFFFFF;">

            <h2 class="mt-5 col-sm-10 ml-auto mr-auto">Self Assesment Resiko Covid 19 (NCI)</h2>
            <h5 class="mt-5">Tanggal : <span id="tanggal"></span></h5>
            <br>
            <form method="POST" action="/postlogin" class="text-center mt-4 col-sm-8 ml-auto mr-auto">
                @csrf
                <div class="form-group ">
                    <input id="email" type="email" name="email" class="form-control" :value="old('email')"
                        placeholder="Masukkan Email" required autofocus>
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


</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="style/date.js"></script>


</html>
