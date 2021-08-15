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
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/style/formfill.css" type="text/css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="modal fade" id="myModal" style="color: #6FA74C;">
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
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container my-1">
                        <div class="question ml-sm-5 pl-sm-5 pt-2">
                            <form action="" method="POST">
                            @csrf
                            <div class="py-2 h5"><b>1. Apakah pernah keluar rumah/ tempat umum (pasar, fasyankes,
                                    kerumunan orang, dan
                                    lain lain)?</b></div>
                            <div id="options">
                                <label class="options">Ya <input type="radio" name="quest_one" value="Ya"> <span
                                        class="checkmark"></span> </label>
                                <label class="options">Tidak <input type="radio" name="quest_one" value="Tidak"> <span
                                        class="checkmark"></span> </label>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <div class="ml-auto mr-sm-1"> <a type="submit" href="/formquest/formdua"
                                        class="btn btn-success">Next</a> </div>
                            </div>
                            </form>   
                        </div>

                    </div>
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
<script>
    $(window).on('load', function () {
        var delayMs = 100; // delay in milliseconds

        setTimeout(function () {
            $('#myModal').modal('show');
        }, delayMs);
    });

</script>

</html>
