<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style/register.css" type="text/css">

    <title>Register</title>
</head>

<body>


    <div class="row full-height">
        <div class="leftarea col-sm-7 text-center mx-auto align-self-center" style="background-color:#F1FFD6;"><img
                class="img-fluid" src="image/logo.png" alt="" style="width: 400px;"></div>
        <div class="rightarea text-center col-sm-5" style="background-color:#FFFFFF;">

            <h2 class="mt-4 col-sm-10 ml-auto mr-auto">Self Assesment Resiko Covid 19 (NCI)</h2>
            <h5 class="mt-0">Tanggal : <span id="tanggal"></span></h5>
            <br>
            <form method="POST" action="{{route('post.register')}}" class="text-center mt-0 col-sm-8 ml-auto mr-auto"
                style="margin-top: 10px;">
                @csrf
                <!-- Name -->
                <div class="form-group ">
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" type="text"
                        name="name" :value="old('name')" placeholder="Masukkan Nama Lengkap" required autofocus>
                    @if ($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name')}}
                    </div>
                    @endif
                </div>

                <!-- Divisi -->
                <div class="form-group">
                    <select id="inputState" class="form-control" name="divisi">
                        <option selected>Pilih Divisi</option>
                        <option value="Divisi Marketing">Divisi Marketing</option>
                        <option value="Divisi HR">Divisi HR</option>
                        <option value="Divisi PR">Divisi PR</option>
                    </select>
                </div>

                <!-- Divisi -->
                <div class="form-group">
                    <select id="inputState" class="form-control" name="jenis_kelamin">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <!-- Email -->
                <div class="form-group ">
                    <input id="email" type="email" name="email"
                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" :value="old('email')"
                        placeholder="Masukkan Email" required>
                    @if ($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email')}}
                    </div>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group">
                    <input id="password" type="password" name="password"
                        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" required
                        autocomplete="new-password" placeholder="Masukkan Password">
                    @if ($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password')}}
                    </div>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group">
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" required
                        placeholder="Masukkan Ulang Password">
                    @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password_confirmation')}}
                    </div>
                    @endif
                </div>

                <br>

                <button href="homepage" type="submit" class="btn btn-success col-sm-12"
                    style="margin-top: -12px;">Register</button>
                <small id="emailHelp" class="form-text text-muted">Sudah punya akun? <a href="/">Login</a></small>
            </form><br><br>
        </div>
    </div>

</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="style/date.js"></script>


</html>
