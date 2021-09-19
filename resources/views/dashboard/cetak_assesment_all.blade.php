<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }

    </style>
    <title>Laporan Seluruh Data Self Assesment Covid-19 Karyawan</title>
</head>

<body>
    <div class="form-group">
        <img src="/image/logo.png" alt="" style="height: 60px; margin-bottom:-45px;">
        <h2 align="center"><b>Laporan Seluruh Data Self Assesment Covid-19 Karyawan</b></h2>
        <table class="static" align="center" rules="all" border="1px" style="width:100%;">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama</th>
                    <th scope="col" style="width: auto;">1. Apakah pernah keluar rumah/ tempat umum (pasar, fasyankes,
                        kerumunan orang, dan
                        lain lain)</th>
                    <th scope="col" style="width: auto;">2. Apakah pernah menggunakan transportasi umum?</th>
                    <th scope="col" style="width: auto;">3. Apakah pernah melakukan perjalanan ke luar
                        kota/internasional?
                        (wilayah yang terjangkit/zona merah)</th>
                    <th scope="col" style="width: auto;">4. Apakah anda mengikuti kegiatan yang melibatkan orang
                        banyak?</th>
                    <th scope="col" style="width: auto;">5. Apakah memiliki riwayat kontak erat dengan orang yang
                        dinyatakan
                        ODP, PDP atau konfirm COVID-19 (berjabat tangan, berbicara,
                        berada
                        dalam satu
                        ruangan/ satu rumah)?</th>
                    <th scope="col" style="width: auto;">6. Apakah pernah mengalami demam/ batuk/pilek/sakit
                        tenggorokan/sesak/hilang indera penciuman dalam 14 hari
                        terakhir?</th>
                    <th scope="col">Point</th>
                    <th scope="col" style="background-color: yellow;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($form_answers as $e => $form)
                <tr align="center" class="text-center">
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{date('d F Y H:i:s', strtotime($form->created_at))}}</td>
                    <td>{{$form->clientname}}</td>
                    <td>@if(($form->quest_one)>0)
                        Ya
                        @else
                        Tidak
                        @endif</td>
                    <td>@if(($form->quest_two)>0)
                        Ya
                        @else
                        Tidak
                        @endif</td>
                    <td>@if(($form->quest_three)>0)
                        Ya
                        @else
                        Tidak
                        @endif</td>
                    <td>@if(($form->quest_four)>0)
                        Ya
                        @else
                        Tidak
                        @endif</td>
                    <td>@if(($form->quest_five)>0)
                        Ya
                        @else
                        Tidak
                        @endif</td>
                    <td>@if(($form->quest_six)>0)
                        Ya
                        @else
                        Tidak
                        @endif</td>
                    <td>{{$form->hasil}}</td>
                    <td style="background-color: yellow;">{{$form->keterangan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();

    </script>
</body>

</html>
