<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NCI Form Assesment Cov-19</title>

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
                        <a class="nav-link" href="#">Dashboard</a>
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
                Home
            </h2>
        </div>
    </header>


    <div class="modal fade" id="myModal" style="color: #6FA74C;">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Halo! <strong></strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="left">
                    <p>Jangan lupa untuk mengisi formulir Assesment Covid-19 sebelum masuk kantor!</p>

                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                    <div class="container mt-5 text-center">
                        <div class="card ml-auto mr-auto" style="width: 28rem;">
                            <img class="card-img-top ml-auto mr-auto" src="/image/formicon.png" alt="Card image cap"
                                style="width: 140px;margin-top:-50px;">
                            <!-- Button trigger modal -->
                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"
                                style="position:absolute; width: 120px; font-size: 12px; margin-left: 15px; margin-top: 10px;">
                                Baca Instrument
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Baca Instrument Sebelum
                                                Mengisi Form !</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" align="left">
                                            <p>Silahkan pilih salah satu jawaban yang paling sesuai dengan kondisi Anda
                                                secara JUJUR dan
                                                TERBUKA.</p>
                                            <ul>
                                                <li>Untuk nomor 1-4 , jika menjawab "Ya" diberi poin 1</li>
                                                <li>Untuk nomor 5-6, jika menjawab "Ya" diberi poin 5</li>
                                            </ul>

                                            <p>
                                                Hasil total keseluruhan akan dinilai, dan nilai rentang adalah sebagai
                                                berikut :
                                                <ul>
                                                    <li>0 = Risiko Kecil</li>
                                                    <li>1-4 = Risiko Sedang</li>
                                                    <li>> 5 = Risiko Besar </li>
                                                </ul>
                                            </p>

                                            <p>
                                                TINDAK LANJUT:
                                            </p>
                                            <ul>
                                                <li>Risiko besar, agar dilakukan investigasi dan tidak diperkenankan
                                                    masuk ke area
                                                    kantor. Karyawan dengan risiko
                                                    besar dilakukan pemeriksaan Antigen / PCR.</li>
                                                <li>Risiko kecil - sedang, dilakukan pemeriksaan suhu di pintu masuk.
                                                    Apabila
                                                    didapatkan suhu ≥ 37,3°C agar dilakukan investigasi dan pemeriksaan
                                                    petugas
                                                    kesehatan. Jika sudah
                                                    dipastikan tidak memenuhi kriteria OTG, ODP atau PDP, karyawan dapat
                                                    masuk ke area
                                                    kantor. </li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tutup Modal -->

                            <div class="card-body">
                                <h4>
                                    Form Assesment Covid-19
                                </h4>
                                <p class="mt-4">Tanggal : <span id="tanggal"></span></p>
                                <a href="" type="button" class="btn btn-outline-success" style="width: 80%;">Isi
                                    Form</a>
                                <a href="" type="button" class="btn btn-outline-success mt-4"
                                    style="width: 80%;">History
                                    Form</a>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

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
