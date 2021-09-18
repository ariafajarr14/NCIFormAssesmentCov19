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
    <title>Cetak Report Temperature</title>
</head>

<body>
    <div class="form-group">
        <h2 align="center"><b>Report Data Temperature</b></h2>
        <table class="static" align="center" rules="all" border="1px" style="width:100%;">
        <thead>
                            <tr class="text-center">
                                <th scope="col" >No</th>
                                <th scope="col" style="width: 30%;">Tanggal</th>
                                <th scope="col" >Nama</th>
                                <th scope="col" style="width: 8%;">Suhu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($temperature as $key => $temp)
                            <tr class="text-center">
                                <th scope="row">{{ $loop->iteration}}</th>
                                <td>{{date('d F Y H:i:s', strtotime($temp->created_at))}}</td>
                                <td>{{$temp->clientname}}</td>
                                <td>{{$temp->suhu}} &#8451;</td>
                            </tr>
                            @endforeach
                        </tbody>
        </table>
    </div>
</body>

</html>
