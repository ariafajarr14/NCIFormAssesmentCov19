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
            <form method="" action="" class="text-center mt-4 col-sm-8 ml-auto mr-auto">


                <!-- Name -->
                <div class="form-group ">
                    <input class="form-control" id="name" type="text" name="name" :value="old('name')"
                        placeholder="Masukkan Nama Lengkap" required autofocus>
                </div>

                <!-- Email -->
                <div class="form-group ">
                    <input id="email" type="email" name="email" class="form-control" :value="old('email')"
                        placeholder="Masukkan Email" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <input id="password" type="password" name="password" class="form-control" required
                        autocomplete="new-password" placeholder="Masukkan Password">
                </div>

                <!-- Konfirmasi Password -->
                <div class="form-group">
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control"
                        required placeholder="Masukkan Ulang Password">
                </div>
                <br>

                <button href="homepage" type="submit" class="btn btn-success col-sm-12">Register</button>
                <small id="emailHelp" class="form-text text-muted">Sudah punya akun? <a href="/">Login</a></small>
            </form><br><br>
        </div>
    </div>

</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="style/date.js"></script>


</html>
